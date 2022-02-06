<?php


namespace App\Patterns\Creational\AbstractFactory\Interfaces;


interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckbox(): CheckBoxInterface;
}