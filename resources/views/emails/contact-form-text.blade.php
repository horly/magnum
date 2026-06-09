Nouvelle demande de contact
Formulaire du site Magnum Multi Services

Nom : {{ $contact['full_name'] }}
Email : {{ $contact['email'] }}
Téléphone : {{ $contact['phone'] ?: 'Non renseigné' }}
Entreprise : {{ $contact['company'] ?: 'Non renseignée' }}
Service demandé : {{ $contact['requested_service'] }}

Message :
{{ $contact['message'] }}
