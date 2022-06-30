<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public array $contact_mail){}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact_mail',[
            'name' => $this->contact_mail['name'],
            'email' => $this->contact_mail['email'],
            'telegram' => $this->contact_mail['telegram'],
            'message' => $this->contact_mail['message'],
        ]);
    }
}
