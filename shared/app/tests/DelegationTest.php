<?php

namespace App\Tests;

use App\Patterns\Fundamental\Delegation\MessengerManager;
use PHPUnit\Framework\TestCase;

class DelegationTest extends TestCase
{
    public function test(): void
    {
        $item = new MessengerManager();
        $item->setSender('sender@mail.ru')
            ->setRecipient('recipient@mail.ru')
            ->setMessage('Hello email messenger')
            ->send()
        ;

        $item->toSms()
            ->setSender('sender@mail.ru')
            ->setRecipient('recipient@mail.ru')
            ->setMessage('Hello SMS messenger')
            ->send()
        ;
    }
}
