<?php

namespace App\Tests;

use App\Patterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\Patterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\Patterns\Creational\AbstractFactory\GuiKitFactory;
use App\Patterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function test(): void
    {
        $switcherFactory = new GuiKitFactory();
        $factory1 = $switcherFactory->getFactory(SemanticUiFactory::TYPE);
        $factory2 = $switcherFactory->getFactory(BootstrapFactory::TYPE);
        $this->clientCode($factory1);
        $this->clientCode($factory2);
    }

    private function clientCode(GuiFactoryInterface $factory)
    {
        dump($factory->buildButton()->draw());
        dump($factory->buildCheckbox()->draw());
    }
}
