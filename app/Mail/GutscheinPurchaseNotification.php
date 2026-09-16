<?php

namespace App\Mail;

use App\Models\GutscheinOrder;
use BeyondCode\Vouchers\Models\Voucher;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GutscheinPurchaseNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public GutscheinOrder $order,
        public Voucher $voucher,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Neuer Gutschein-Kauf: '.$this->order->name.' ('.number_format((float) $this->order->amount, 2, ',', '.').' €)',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.gutschein-purchase-notification',
            with: [
                'order' => $this->order,
                'voucher' => $this->voucher,
            ],
        );
    }
}
