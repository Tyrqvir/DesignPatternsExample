<?php


namespace App\Patterns\Creational\FactoryMethod\Classes\Forms;


use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\Patterns\Creational\FactoryMethod\FormInterface;

abstract class AbstractForm implements FormInterface
{

    public function render(): array
    {
        $guiKit = $this->createGuiKit();
        $result[] = $guiKit->buildButton()->draw();
        $result[] = $guiKit->buildCheckbox()->draw();

        return $result;
    }

    /**
     * Get instrument for render object of form
     *
     * @return GuiFactoryInterface
     */
    abstract public function createGuiKit(): GuiFactoryInterface;
}