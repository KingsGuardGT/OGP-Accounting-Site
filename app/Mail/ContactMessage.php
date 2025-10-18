<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $emailAddress;
    public string $bodyMessage;

    public function __construct(string $name, string $emailAddress, string $bodyMessage)
    {
        $this->name = $name;
        $this->emailAddress = $emailAddress;
        $this->bodyMessage = $bodyMessage;
    }

    public function build()
    {
        return $this->subject('New Contact Message')
            ->replyTo($this->emailAddress, $this->name)
            ->view('emails.contact-message');
    }
}
