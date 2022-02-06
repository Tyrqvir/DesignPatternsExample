<?php

namespace App\Tests;

use App\Patterns\Creational\FactoryMethod\Classes\Forms\BootstrapDialogForm;
use App\Patterns\Creational\FactoryMethod\Classes\Forms\SemanticUiDialogForm;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function test(): void
    {
        /**
         * Смысл в том что механика должна быть в родителе, а не в потомках.
         */
        $dialogForm1 = new BootstrapDialogForm();
        $dialogForm2 = new SemanticUiDialogForm();
        dump($dialogForm1->render());
        dump($dialogForm2->render());
    }

}
