<?php

use App\Mail\ContactFormMessage;
use Illuminate\Support\Facades\Mail;

test('home page uses french by default', function () {
    $response = $this->get('/');

    $response
        ->assertSuccessful()
        ->assertSee('lang="fr"', false)
        ->assertSee('Accueil');
});

test('contact form sends a message to the configured recipient', function () {
    Mail::fake();

    config(['mail.contact_recipient' => 'info@magnum-msgroup.cd']);

    $response = $this->post('/contact?lang=fr', [
        'full_name' => 'Jane Doe',
        'email' => 'webmaster@magnum-msgroup.cd',
        'phone' => '+243 000 000',
        'company' => 'ACME',
        'requested_service' => 'Solutions logistiques',
        'message' => 'Bonjour, nous avons besoin d’un accompagnement logistique.',
    ]);

    $response
        ->assertRedirect()
        ->assertSessionHas('contact_status');

    Mail::assertSent(ContactFormMessage::class, function (ContactFormMessage $mail) {
        return $mail->hasTo('info@magnum-msgroup.cd')
            && $mail->contact['email'] === 'webmaster@magnum-msgroup.cd'
            && $mail->contact['requested_service'] === 'Solutions logistiques';
    });
});

test('contact form returns json for successful ajax submissions', function () {
    Mail::fake();

    config(['mail.contact_recipient' => 'info@magnum-msgroup.cd']);

    $response = $this->postJson('/contact?lang=fr', [
        'full_name' => 'Jane Doe',
        'email' => 'webmaster@magnum-msgroup.cd',
        'phone' => '+243 000 000',
        'company' => 'ACME',
        'requested_service' => 'Solutions logistiques',
        'message' => 'Bonjour, nous avons besoin d’un accompagnement logistique.',
    ]);

    $response
        ->assertSuccessful()
        ->assertJsonStructure(['message']);

    Mail::assertSent(ContactFormMessage::class);
});

test('contact form requires essential fields before sending', function () {
    Mail::fake();

    $response = $this->post('/contact?lang=fr', []);

    $response
        ->assertRedirect()
        ->assertSessionHasErrors([
            'full_name',
            'email',
            'requested_service',
            'message',
        ]);

    Mail::assertNothingSent();
});

test('contact form returns json errors for ajax validation failures', function () {
    Mail::fake();

    $response = $this->postJson('/contact?lang=fr', []);

    $response
        ->assertUnprocessable()
        ->assertJsonValidationErrors([
            'full_name',
            'email',
            'requested_service',
            'message',
        ]);

    Mail::assertNothingSent();
});

test('contact form renders validation messages on the page', function () {
    Mail::fake();

    $response = $this
        ->from('/?lang=fr#home-contact')
        ->followingRedirects()
        ->post('/contact?lang=fr', []);

    $response
        ->assertSuccessful()
        ->assertSee('novalidate', false)
        ->assertSee('aria-invalid="true"', false)
        ->assertSee('Veuillez vérifier les informations du formulaire avant de l’envoyer.', false)
        ->assertSee('Veuillez renseigner votre nom complet.', false)
        ->assertSee('Veuillez renseigner votre adresse email.', false)
        ->assertSee('Veuillez sélectionner le service demandé.', false)
        ->assertSee('Veuillez renseigner votre message.', false);

    Mail::assertNothingSent();
});

test('contact form rejects unknown services', function () {
    Mail::fake();

    $response = $this->post('/contact?lang=fr', [
        'full_name' => 'Jane Doe',
        'email' => 'webmaster@magnum-msgroup.cd',
        'requested_service' => 'Service inventé',
        'message' => 'Bonjour, nous avons besoin d’un accompagnement logistique.',
    ]);

    $response
        ->assertRedirect()
        ->assertSessionHasErrors('requested_service');

    Mail::assertNothingSent();
});
