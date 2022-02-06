<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility\Interfaces;


use App\Patterns\Behavioral\ChainOfResponsibility\DTO\PaymentSystemInput;

interface HandlerInterface
{
    public function setNext(HandlerInterface $next): HandlerInterface;

    public function apply(PaymentSystemInput $input): string;
}