<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility\DTO;


class PaymentSystemInput
{
    private string $paymentSystem;
    private int $age;
    private string $country;

    public function __construct(array $request)
    {
        $this->paymentSystem = $request['payment'];
        $this->age = (int)$request['age'];
        $this->country = $request['country'];
    }

    public function getPaymentSystem(): string
    {
        return $this->paymentSystem;
    }

    public function isValidAge(): bool
    {
        return $this->getAge() > 20;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function isValidCountry(): bool
    {
        return $this->getCountry() === 'Poland';
    }

    public function getCountry(): string
    {
        return $this->country;
    }

}