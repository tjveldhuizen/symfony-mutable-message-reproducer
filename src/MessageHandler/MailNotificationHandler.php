<?php

namespace App\MessageHandler;

use App\Message\MailNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MailNotificationHandler implements MessageHandlerInterface
{
    public function __invoke(MailNotification $message)
    {
        $message->content .= "!";

        throw new \Exception('Something went wrong');
    }
}