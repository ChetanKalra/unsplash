<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewPhotoMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $photo;

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
        return $this->view('emails.new-photo')->with('photo', $this->photo);
    }
}
