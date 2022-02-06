<?php


namespace App\Patterns\Creational\StaticFactory;


use App\Patterns\Fundamental\Delegation\Interfaces\MessengerInterface;

interface MessengerStaticFactoryInterface
{
    public static function build(string $type): MessengerInterface;
}