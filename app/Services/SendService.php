<?php

namespace App\Services;

use App\DTO\EmailDTO;
use App\Entities\Email;
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

        $email = $this->hydrateEmailByDTO($emailDTO);

        $this->mailRepository->send($email);

        // ? exception
    }
    // как назвать метод? это фабричный метод? или это гидратор? или что-то еще?
    private function hydrateEmailByDTO(EmailDTO $emailDTO)
    {
        $email = new Email($emailDTO->emailAddress, $emailDTO->messageText);

        return $email;
    }
}
