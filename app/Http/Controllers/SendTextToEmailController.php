<?php

namespace App\Http\Controllers;

use App\DTO\EmailDTO;
use App\Services\SendService;
use Illuminate\Http\Request;

class SendTextToEmailController extends Controller
{
    public function __invoke(Request $request, SendService $sendService, EmailDTO $emailDTO)
    {
        $emailDTO->emailAddress = $request->email;
        $emailDTO->messageText = $request->text;

//        $sendService = new SendService();
        $sendService->send($emailDTO);
    }
}
