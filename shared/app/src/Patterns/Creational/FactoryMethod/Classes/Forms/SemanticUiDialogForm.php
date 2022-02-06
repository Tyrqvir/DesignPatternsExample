<?php


namespace App\Patterns\Creational\FactoryMethod\Classes\Forms;


use App\Patterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiDialogForm extends AbstractForm
{

    /**
     * @inheritDoc
     */
    public function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }
}