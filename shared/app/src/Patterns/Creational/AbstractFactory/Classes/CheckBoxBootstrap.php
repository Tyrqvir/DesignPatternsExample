<?php


namespace App\Patterns\Creational\AbstractFactory\Classes;


use App\Patterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{

    public function draw(): string
    {
        return __CLASS__;
    }
}