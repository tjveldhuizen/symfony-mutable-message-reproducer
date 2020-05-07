<?php

namespace App\Message;

use Doctrine\Common\Collections\Collection;

class SmsNotification
{
    private $content;
    private $recipients;

    public function __construct(string $content, Collection $recipients)
    {
        $this->content = $content;
        $this->recipients = $recipients;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getRecipients(): Collection
    {
        return $this->recipients;
    }

}