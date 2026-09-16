<!DOCTYPE html>
<html lang="de">
<body style="font-family: Arial, sans-serif; color: #222; max-width: 600px; margin: 0 auto;">
    <h2 style="color: #bfa46b;">Neuer Gutschein-Kauf</h2>

    <p>Es wurde soeben ein Gutschein über Stripe bezahlt:</p>

    <table cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Käufer</strong></td>
            <td style="border: 1px solid #ddd;">{{ $order->name }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>E-Mail</strong></td>
            <td style="border: 1px solid #ddd;">{{ $order->email }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Betrag</strong></td>
            <td style="border: 1px solid #ddd;">{{ number_format((float) $order->amount, 2, ',', '.') }} {{ $order->currency }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Zahlungsstatus</strong></td>
            <td style="border: 1px solid #ddd;">Bezahlt über Stripe{{ $order->paid_at ? ' am '.$order->paid_at->format('d.m.Y H:i') : '' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Stripe Session-ID</strong></td>
            <td style="border: 1px solid #ddd;">{{ $order->stripe_session_id }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Gutscheincode</strong></td>
            <td style="border: 1px solid #ddd;">{{ $voucher->code }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Gültig bis</strong></td>
            <td style="border: 1px solid #ddd;">{{ $voucher->expires_at?->format('d.m.Y') }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">Dem Käufer wurde der Gutschein als PDF mit QR-Code per E-Mail zugesendet.</p>
</body>
</html>
