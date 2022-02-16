<?php

namespace App\Entities;


class Email
{
    private $emailAddress;
    private $messageText;

    public function __construct($emailAddress, $messageText)
    {
        $this->emailAddress = $emailAddress;
        $this->messageText = $messageText;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getMessageText()
    {
        return $this->messageText;
    }
}
