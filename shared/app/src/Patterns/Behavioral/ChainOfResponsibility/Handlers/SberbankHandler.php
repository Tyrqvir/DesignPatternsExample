<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility\Handlers;


use App\Patterns\Behavioral\ChainOfResponsibility\DTO\PaymentSystemInput;

final class SberbankHandler extends AbstractHandler
{
    public const PAYMENT_SYSTEM = 'Sberbank';

    public function apply(PaymentSystemInput $input): string
    {
        if ($input->getPaymentSystem() === self::PAYMENT_SYSTEM) {
            echo sprintf('Обработка запроса оплаты через %s', self::PAYMENT_SYSTEM).PHP_EOL;
            exit;
        }

        return parent::apply($input);
    }
}