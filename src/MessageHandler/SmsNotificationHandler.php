<?php

namespace App\MessageHandler;

use App\Message\SmsNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SmsNotificationHandler implements MessageHandlerInterface
{
    public function __invoke(SmsNotification $message)
    {
        $recipients = $message->getRecipients();

        foreach ($recipients as $phoneNumber => $name) {
            // Do something with the recipient here

            unset($recipients[$phoneNumber]);
        }

        throw new \Exception('Something went wrong');
    }
}