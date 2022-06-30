<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApprovedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public array $approved_mail){}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.approved_mail',[
            'user' => $this->approved_mail['user'],
            'location' => $this->approved_mail['location'],
            'telegram' => $this->approved_mail['telegram'],
            'date' => $this->approved_mail['date'],
            'time' => $this->approved_mail['time'],
            'status_type' => $this->approved_mail['status_type'],
        ]);
    }
}
