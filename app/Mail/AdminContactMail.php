<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class AdminContactMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Contact Enquiry')
            ->view('emails.admin-contact');
    }
}
