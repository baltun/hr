<?php

namespace App\Services;

use App\DTO\EmailDTO;
use App\Repositories\MailRepository;

class SendService
{
    public $mailRepository;
    public function __construct(MailRepository $mailRepository)
    {
        $this->mailRepository = $mailRepository;
    }
    public function send(EmailDTO $emailDTO)
    {
        $this->mailRepository->send($emailDTO);
        // ? exception
    }
}
