<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class UserThankYouMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Thank You For Contacting Us')
                    ->view('emails.user-thankyou');
    }
}