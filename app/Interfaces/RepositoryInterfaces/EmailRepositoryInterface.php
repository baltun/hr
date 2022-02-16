<?php

namespace App\Interfaces\RepositoryInterfaces;

use App\DTO\EmailDTO;

interface EmailRepositoryInterface
{
    public function send(EmailDTO $emailDTO);
}
