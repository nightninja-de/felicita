<!DOCTYPE html>
<html lang="de">
<body style="font-family: Arial, sans-serif; color: #222; max-width: 600px; margin: 0 auto;">
    <h2 style="color: #bfa46b;">Neue Reservierung</h2>

    <p>Es wurde soeben eine neue Tischreservierung über die Website vorgenommen:</p>

    <table cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Name</strong></td>
            <td style="border: 1px solid #ddd;">{{ $reservation->name }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>E-Mail</strong></td>
            <td style="border: 1px solid #ddd;">{{ $reservation->email }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Telefon</strong></td>
            <td style="border: 1px solid #ddd;">{{ $reservation->phone }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Anzahl Gäste</strong></td>
            <td style="border: 1px solid #ddd;">{{ $reservation->guests }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Datum</strong></td>
            <td style="border: 1px solid #ddd;">{{ $reservation->date->format('d.m.Y') }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Uhrzeit</strong></td>
            <td style="border: 1px solid #ddd;">{{ \Illuminate\Support\Carbon::parse($reservation->time)->format('H:i') }} Uhr</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">Bitte den Gast zeitnah kontaktieren, um die Reservierung zu bestätigen.</p>
</body>
</html>
