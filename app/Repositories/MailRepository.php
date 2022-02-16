<?php

namespace App\Repositories;

use App\Entities\Email;
use App\Mail\BeautifullMail;
use Illuminate\Support\Facades\Mail;

class MailRepository
{

    public function send(Email $email)
    {
        Mail::to($email->getEmailAddress())->send(new BeautifullMail($email->getMessageText()));
    }
}
