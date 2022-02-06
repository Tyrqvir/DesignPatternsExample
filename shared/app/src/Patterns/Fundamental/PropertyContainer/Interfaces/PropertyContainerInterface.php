<?php


namespace App\Patterns\Fundamental\PropertyContainer\Interfaces;


interface PropertyContainerInterface
{
    public function addProperty($propertyName, $value);

    public function removeProperty($propertyName);

    public function getProperty($propertyName);

    public function setProperty($propertyName, $value);

}