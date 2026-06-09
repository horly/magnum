<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de contact</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; color: #111827; background: #f4f6fb;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background: #f4f6fb; padding: 24px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 680px; background: #ffffff; border: 1px solid #e0e5f2;">
                    <tr>
                        <td style="padding: 24px; background: #06186b; color: #ffffff;">
                            <h1 style="margin: 0; font-size: 24px;">Nouvelle demande de contact</h1>
                            <p style="margin: 8px 0 0;">Formulaire du site Magnum Multi Services</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 24px;">
                            <p><strong>Nom :</strong> {{ $contact['full_name'] }}</p>
                            <p><strong>Email :</strong> {{ $contact['email'] }}</p>
                            <p><strong>Téléphone :</strong> {{ $contact['phone'] ?: 'Non renseigné' }}</p>
                            <p><strong>Entreprise :</strong> {{ $contact['company'] ?: 'Non renseignée' }}</p>
                            <p><strong>Service demandé :</strong> {{ $contact['requested_service'] }}</p>

                            <h2 style="margin: 24px 0 10px; color: #06186b; font-size: 18px;">Message</h2>
                            <div style="padding: 16px; background: #f8f9fd; border-left: 4px solid #ec0044; white-space: pre-line;">{{ $contact['message'] }}</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
