<?php

namespace App\Entities;

use App\DTO\EmailDTO;
use App\Interfaces\RepositoryInterfaces\EmailRepositoryInterface;

class Email
{
    private $email;
    private $text;

    public function __construct(EmailDTO $emailDTO)
    {
        $this->email = $emailDTO->emailAddress;
        $this->text = $emailDTO->messageText;

        $this->emailRepo = $emailRepository;
    }

    public function send(EmailRepositoryInterface $emailRepository)
    {
        $emailRepository->send();
    }
}
