<?php


namespace App\Patterns\Creational\FactoryMethod\Classes\Forms;


use App\Patterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{

    /**
     * @inheritDoc
     */
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}