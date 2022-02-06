<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility;


use App\Patterns\Behavioral\ChainOfResponsibility\DTO\PaymentSystemInput;
use App\Patterns\Behavioral\ChainOfResponsibility\Interfaces\HandlerInterface;

final class PaymentManager
{

    private PaymentSystemInput $paymentSystemInput;

    /**
     * @param PaymentSystemInput $paymentSystemInput
     */
    public function __construct(PaymentSystemInput $paymentSystemInput)
    {
        $this->paymentSystemInput = $paymentSystemInput;
    }

    public function start(HandlerInterface $handler)
    {
        $handler->apply($this->paymentSystemInput);
    }

}
