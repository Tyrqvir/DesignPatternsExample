<?php


namespace App\Patterns\Fundamental\EventChannel\Classes;


use App\Patterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        dump("{$this->getName()} оповещён данными [{$data}}]");
    }

    public function getName(): string
    {
        return $this->name;
    }
}