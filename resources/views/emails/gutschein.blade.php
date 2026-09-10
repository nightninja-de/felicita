<!DOCTYPE html>
<html lang="de">
<body style="font-family: Arial, sans-serif; color: #222; max-width: 600px; margin: 0 auto;">
    <h2 style="color: #bfa46b;">Ihr Felicità Gutschein</h2>

    <p>Hallo {{ $order->name }},</p>

    <p>
        vielen Dank für Ihren Einkauf. Im Anhang finden Sie Ihren Gutschein im Wert von
        <strong>{{ number_format((float) $order->amount, 2, ',', '.') }} €</strong> als PDF mit QR-Code.
    </p>

    <p>
        Bitte zeigen Sie den Gutschein (ausgedruckt oder auf dem Smartphone) bei Ihrem Besuch im
        Restaurant vor &ndash; unser Personal scannt den QR-Code direkt vor Ort.
    </p>

    <p>Gutscheincode: <strong>{{ $voucher->code }}</strong></p>
    <p>Gültig bis: {{ $voucher->expires_at?->format('d.m.Y') }}</p>

    <p>Wir freuen uns auf Ihren Besuch!<br>Ihr Felicità Team</p>
</body>
</html>
