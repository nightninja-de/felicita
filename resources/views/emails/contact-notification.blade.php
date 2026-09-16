<!DOCTYPE html>
<html lang="de">
<body style="font-family: Arial, sans-serif; color: #222; max-width: 600px; margin: 0 auto;">
    <h2 style="color: #bfa46b;">Neue Kontaktanfrage</h2>

    <p>Es wurde soeben eine Nachricht über das Kontaktformular der Website gesendet:</p>

    <table cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <tr>
            <td style="border: 1px solid #ddd;"><strong>Name</strong></td>
            <td style="border: 1px solid #ddd;">{{ $contactMessage->name }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;"><strong>E-Mail</strong></td>
            <td style="border: 1px solid #ddd;">{{ $contactMessage->email }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; vertical-align: top;"><strong>Nachricht</strong></td>
            <td style="border: 1px solid #ddd; white-space: pre-line;">{{ $contactMessage->message }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">Sie können direkt auf diese E-Mail antworten, um den Gast zu erreichen.</p>
</body>
</html>
