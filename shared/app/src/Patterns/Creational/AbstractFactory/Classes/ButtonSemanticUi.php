<?php


namespace App\Patterns\Creational\AbstractFactory\Classes;


use App\Patterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{

    public function draw(): string
    {
        return __CLASS__;
    }
}