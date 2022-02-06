<?php


namespace App\Patterns\Fundamental\Delegation\Interfaces;


interface MessengerInterface
{

    public function setSender(string $value): MessengerInterface;

    public function setRecipient(string $value): MessengerInterface;

    public function setMessage(string $value): MessengerInterface;

    public function send(): bool;
}