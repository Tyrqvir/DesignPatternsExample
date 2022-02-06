<?php


namespace App\Patterns\Creational\AbstractFactory;


use App\Patterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\Patterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case BootstrapFactory::TYPE:
                $factory = new BootstrapFactory();
                break;
            case SemanticUiFactory::TYPE:
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new \LogicException("Unknown type [{$type}]");
        }

        return $factory;
    }
}