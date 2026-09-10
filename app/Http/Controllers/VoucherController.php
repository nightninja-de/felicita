<?php

namespace App\Http\Controllers;

use App\Mail\SendGutscheinMail;
use App\Models\GutscheinOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use BeyondCode\Vouchers\Exceptions\VoucherAlreadyRedeemed;
use BeyondCode\Vouchers\Exceptions\VoucherExpired;
use BeyondCode\Vouchers\Exceptions\VoucherIsInvalid;
use BeyondCode\Vouchers\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\Checkout\Session as StripeCheckoutSession;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Stripe;
use Stripe\Webhook;
use UnexpectedValueException;

class VoucherController extends Controller
{
    public function form()
    {
        return view('home.voucher_form');
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'amount' => ['required', 'numeric', 'min:10', 'max:500'],
        ]);

        $order = GutscheinOrder::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'amount' => $data['amount'],
            'currency' => 'EUR',
            'status' => 'pending',
        ]);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = StripeCheckoutSession::create([
            'mode' => 'payment',
            'customer_email' => $order->email,
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => (int) round($order->amount * 100),
                    'product_data' => [
                        'name' => 'Felicità Gutschein',
                        'description' => 'Restaurant Gutschein im Wert von '.number_format($order->amount, 2, ',', '.').' €',
                    ],
                ],
                'quantity' => 1,
            ]],
            'success_url' => route('voucher.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('voucher.form'),
        ]);

        $order->update(['stripe_session_id' => $session->id]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        return view('home.voucher_success');
    }

    public function stripeWebhook(Request $request)
    {
        $secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent(
                $request->getContent(),
                $request->header('Stripe-Signature'),
                $secret
            );
        } catch (UnexpectedValueException|SignatureVerificationException $e) {
            Log::warning('Stripe webhook signature verification failed: '.$e->getMessage());

            return response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $order = GutscheinOrder::where('stripe_session_id', $session->id)->first();

            if ($order && $order->status !== 'paid') {
                $order->update([
                    'status' => 'paid',
                    'paid_at' => now(),
                ]);

                $voucher = $order->createVoucher([
                    'buyer_name' => $order->name,
                    'buyer_email' => $order->email,
                    'amount' => (string) $order->amount,
                    'currency' => $order->currency,
                ], now()->addYear());

                Mail::to($order->email)->queue(new SendGutscheinMail($order, $voucher));
            }
        }

        return response('OK', 200);
    }

    public function scanPage()
    {
        return view('staff.scan');
    }

    public function checkCode(Request $request)
    {
        $data = $request->validate(['code' => ['required', 'string']]);

        $voucher = Voucher::whereCode($this->normalizeCode($data['code']))->first();

        if (! $voucher) {
            return response()->json(['status' => 'invalid', 'message' => 'Gutschein nicht gefunden.']);
        }

        if ($voucher->users()->exists()) {
            return response()->json(['status' => 'already_redeemed', 'message' => 'Dieser Gutschein wurde bereits eingelöst.']);
        }

        if ($voucher->isExpired()) {
            return response()->json(['status' => 'expired', 'message' => 'Dieser Gutschein ist abgelaufen.']);
        }

        return response()->json([
            'status' => 'valid',
            'message' => 'Gutschein gültig.',
            'code' => $voucher->code,
            'amount' => $voucher->data->get('amount'),
            'buyer_name' => $voucher->data->get('buyer_name'),
        ]);
    }

    public function redeemCode(Request $request)
    {
        $data = $request->validate(['code' => ['required', 'string']]);
        $code = $this->normalizeCode($data['code']);

        try {
            $voucher = DB::transaction(function () use ($code, $request) {
                // Re-check for ANY prior redemption (by any staff account) under a row lock,
                // since the package's own redeemCode() only blocks the *same* account from
                // redeeming twice — it would silently let a second staff login redeem an
                // already-used voucher again.
                $voucher = Voucher::whereCode($code)->lockForUpdate()->first();

                if (! $voucher) {
                    throw VoucherIsInvalid::withCode($code);
                }

                if ($voucher->users()->exists()) {
                    throw VoucherAlreadyRedeemed::create($voucher);
                }

                if ($voucher->isExpired()) {
                    throw VoucherExpired::create($voucher);
                }

                return $request->user()->redeemCode($code);
            });
        } catch (VoucherIsInvalid $e) {
            return response()->json(['status' => 'invalid', 'message' => 'Gutschein nicht gefunden.']);
        } catch (VoucherAlreadyRedeemed $e) {
            return response()->json(['status' => 'already_redeemed', 'message' => 'Dieser Gutschein wurde bereits eingelöst.']);
        } catch (VoucherExpired $e) {
            return response()->json(['status' => 'expired', 'message' => 'Dieser Gutschein ist abgelaufen.']);
        }

        return response()->json([
            'status' => 'redeemed',
            'message' => 'Gutschein erfolgreich eingelöst.',
            'code' => $voucher->code,
            'amount' => $voucher->data->get('amount'),
        ]);
    }

    private function normalizeCode(string $code): string
    {
        return strtoupper(trim($code));
    }
}
