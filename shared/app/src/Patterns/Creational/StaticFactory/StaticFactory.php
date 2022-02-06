<?php


namespace App\Patterns\Creational\StaticFactory;


use App\Patterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\Patterns\Fundamental\Delegation\MessengerManager;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build(string $type): MessengerInterface
    {
        $messenger = new MessengerManager();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'admin@site.local';
                break;
            case 'sms':
                $messenger->toSms();
                $sender = '8888888';
                break;
            default:
                throw new \LogicException("Unknow type [{$type}]");
        }

        $messenger
            ->setSender($sender)
            ->setMessage('default message')
        ;

        return $messenger;
    }
}