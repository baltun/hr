<?php

namespace App\Repositories;

use App\DTO\EmailDTO;
use App\Mail\BeautifullMail;
use Illuminate\Support\Facades\Mail;

class MailRepository
{

    public function send(EmailDTO $emailDTO)
    {
        Mail::to('ivkol@mail.ru')->send(new BeautifullMail());
    }
}
