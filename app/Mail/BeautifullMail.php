<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BeautifullMail extends Mailable
{
    use Queueable, SerializesModels;

    private $messageText;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messageText)
    {
        $this->messageText = $messageText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.beautiful_mail', ['messageText' => $this->messageText]);
    }
}
