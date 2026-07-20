<?php

namespace App\Mail;

use App\Models\Gallery;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GalleryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $gallery;

    /**
     * Create a new message instance.
     */
    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject($this->gallery->title)
            ->view('emails.gallery');
    }
}
