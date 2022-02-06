<?php


namespace App\Patterns\Creational\AbstractFactory\Factories;


use App\Patterns\Creational\AbstractFactory\Classes\ButtonBootstrap;
use App\Patterns\Creational\AbstractFactory\Classes\CheckBoxBootstrap;
use App\Patterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\Patterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    public const TYPE = 'bootstrap';

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}