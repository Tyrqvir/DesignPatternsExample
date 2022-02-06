<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility\Handlers;


use App\Patterns\Behavioral\ChainOfResponsibility\DTO\PaymentSystemInput;
use App\Patterns\Behavioral\ChainOfResponsibility\Exceptions\NotFoundPaymentSystemException;
use App\Patterns\Behavioral\ChainOfResponsibility\Interfaces\HandlerInterface;

abstract class AbstractHandler implements HandlerInterface
{
    /**
     * Следующий обработчик.
     */
    private ?HandlerInterface $nextHandler = null;

    public function setNext(HandlerInterface $next): HandlerInterface
    {
        $this->nextHandler = $next;

        return $next;
    }


    /**
     * @throws NotFoundPaymentSystemException
     */
    public function apply(PaymentSystemInput $input): string
    {
        if (!empty($this->nextHandler)) {
            $this->nextHandler->apply($input);
        }

        throw new NotFoundPaymentSystemException(sprintf('Payment system %s not found', $input->getPaymentSystem()));
    }
}