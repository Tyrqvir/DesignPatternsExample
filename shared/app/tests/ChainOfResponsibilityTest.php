<?php

declare(strict_types=1);


namespace App\Tests;


use App\Patterns\Behavioral\ChainOfResponsibility\DTO\PaymentSystemInput;
use App\Patterns\Behavioral\ChainOfResponsibility\Handlers\PayPalHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Handlers\QiwiHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Handlers\SberbankHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\PaymentManager;
use PHPUnit\Framework\TestCase;


class ChainOfResponsibilityTest extends TestCase
{

    public function test(): void
    {
        //Real case => validate request => make DTO input and validate them => handle => response

        $request = [
            'name' => 'John',
            'country' => 'Poland',
            'age' => '25',
            'payment' => 'QIWI',
        ];

        try {
            $paymentInput = new PaymentSystemInput($request);
            $manager = new PaymentManager($paymentInput);

            $sber = new SberbankHandler();
            $qiwi = new QiwiHandler();
            $paypal = new PayPalHandler();

            $qiwi
                ->setNext($paypal)
                ->setNext($sber)
            ;

            $manager->start($qiwi);
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
    }
}
