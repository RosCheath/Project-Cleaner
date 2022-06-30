<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public array $bookin_mail){}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.booking_mail',[
            'user' => $this->bookin_mail['user'],
            'location' => $this->bookin_mail['location'],
            'telegram' => $this->bookin_mail['telegram'],
            'date' => $this->bookin_mail['date'],
            'time' => $this->bookin_mail['time'],
            'status_type' => $this->bookin_mail['status_type'],
        ]);
    }
}
