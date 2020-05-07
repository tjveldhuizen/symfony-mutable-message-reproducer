<?php

namespace App\Message;

class MailNotification
{
    public $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
}