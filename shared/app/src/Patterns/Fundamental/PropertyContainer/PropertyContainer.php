<?php


namespace App\Patterns\Fundamental\PropertyContainer;


use App\Patterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
    private array $propertyContainer = [];


    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    public function removeProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    public function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName];
    }

    public function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \LogicException("Not exist [{$propertyName}] in propertyContainer");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}