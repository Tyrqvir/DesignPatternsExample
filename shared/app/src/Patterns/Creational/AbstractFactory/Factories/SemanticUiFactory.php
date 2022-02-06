<?php


namespace App\Patterns\Creational\AbstractFactory\Factories;


use App\Patterns\Creational\AbstractFactory\Classes\ButtonSemanticUi;
use App\Patterns\Creational\AbstractFactory\Classes\CheckBoxSemanticUi;
use App\Patterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\Patterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    public const TYPE = 'samanticui';

    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}