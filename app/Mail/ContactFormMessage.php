<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array<string, string|null> $contact
     */
    public function __construct(public array $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address(
                    $this->contact['email'],
                    $this->contact['full_name'],
                ),
            ],
            subject: 'Nouvelle demande de contact - Magnum Multi Services',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
            text: 'emails.contact-form-text',
        );
    }
}
