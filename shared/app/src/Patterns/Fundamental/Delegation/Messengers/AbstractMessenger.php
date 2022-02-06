<?php


namespace App\Patterns\Fundamental\Delegation\Messengers;


use App\Patterns\Fundamental\Delegation\Interfaces\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    protected string $sender;
    protected string $recipient;
    protected string $message;

    public function setSender(string $value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    public function setRecipient(string $value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    public function setMessage(string $value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }

    public function send(): bool
    {
        return true;
    }


}