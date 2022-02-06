<?php

namespace App\Patterns\Behavioral\Strategy\Strategies;

use App\Patterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use App\Patterns\Behavioral\Strategy\Models\User;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc(array $period, User $user): int
    {
        return random_int(200, 500);
    }

    public function getName(): string
    {
        return (new \ReflectionClass(static::class))->getShortName();
    }
}