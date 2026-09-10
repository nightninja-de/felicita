<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Helvetica, Arial, sans-serif; color: #2b2b2b; }
        .voucher { border: 2px solid #bfa46b; border-radius: 12px; padding: 30px; text-align: center; }
        .logo { max-width: 160px; margin-bottom: 10px; }
        h1 { color: #bfa46b; font-size: 22px; margin: 10px 0; }
        .amount { font-size: 32px; font-weight: bold; margin: 20px 0; }
        .code { font-size: 20px; letter-spacing: 2px; font-weight: bold; margin: 10px 0; }
        .qr { margin: 20px 0; }
        .meta { font-size: 12px; color: #666; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="voucher">
        <img class="logo" src="{{ public_path('assets/img/logo.png') }}" alt="Felicità">
        <h1>Gutschein</h1>
        <p>für {{ $order->name }}</p>
        <div class="amount">{{ number_format((float) $order->amount, 2, ',', '.') }} &euro;</div>
        <div class="qr">
            <img src="{{ $qrDataUri }}" alt="QR Code" width="220" height="220">
        </div>
        <div class="code">{{ $voucher->code }}</div>
        <div class="meta">
            Gültig bis {{ $voucher->expires_at?->format('d.m.Y') }}<br>
            Bitte diesen Gutschein beim Besuch im Restaurant vorzeigen &ndash; unser Personal scannt den QR-Code.
        </div>
    </div>
</body>
</html>
