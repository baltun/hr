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
        $this->email = $emailDTO->email;
        $this->text = $emailDTO->text;
    }

    public function send(EmailRepositoryInterface $emailRepository)
    {
        $emailRepository->send();
    }
}
