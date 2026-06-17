<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CareerApplicationUserMail extends Mailable
{
    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('Application Received')
            ->view('emails.career-user');
    }
}
