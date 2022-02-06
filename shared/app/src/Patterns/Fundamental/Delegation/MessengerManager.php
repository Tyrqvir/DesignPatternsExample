<?php


namespace App\Patterns\Fundamental\Delegation;


use App\Patterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\Patterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\Patterns\Fundamental\Delegation\Messengers\SmsMessenger;

class MessengerManager implements MessengerInterface
{

    private MessengerInterface $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail(): void
    {
        $this->messenger = new EmailMessenger();
    }

    public function setSender($value): MessengerInterface
    {
        $this->messenger->setSender($value);

        return $this->messenger;
    }

    public function setRecipient($value): MessengerInterface
    {
        $this->messenger->setRecipient($value);

        return $this->messenger;
    }

    public function setMessage($value): MessengerInterface
    {
        $this->messenger->setMessage($value);

        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }

    public function toSms(): self
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }
}