<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PhotoNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $photo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($photo)
    {
        $this->photo = $photo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.photo-notification');
    }
}
