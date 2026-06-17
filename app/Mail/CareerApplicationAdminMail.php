<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CareerApplicationAdminMail extends Mailable
{
    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('New Career Application')
            ->view('emails.career-admin');
    }
}
