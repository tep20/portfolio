<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $msgContent;

    public function __construct($name, $email, $msgContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msgContent = $msgContent;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->email],
            subject: 'Pesan Baru Portfolio dari ' . $this->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            htmlString: "<h3>Pesan Baru dari Kontak Portfolio</h3>
                         <p><strong>Nama:</strong> {$this->name}</p>
                         <p><strong>Email:</strong> {$this->email}</p>
                         <p><strong>Pesan:</strong><br>{$this->msgContent}</p>",
        );
    }
}