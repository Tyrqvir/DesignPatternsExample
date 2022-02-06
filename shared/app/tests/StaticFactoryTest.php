<?php

namespace App\Tests;

use App\Patterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function test(): void
    {
        $mailMessenger = StaticFactory::build('email');
        $phoneMessenger = StaticFactory::build('sms');
        dump($mailMessenger);
        dump($phoneMessenger);
    }
}
