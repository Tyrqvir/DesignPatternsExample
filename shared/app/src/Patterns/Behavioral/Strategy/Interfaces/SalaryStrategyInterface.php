<?php


namespace App\Patterns\Behavioral\Strategy\Interfaces;


use App\Patterns\Behavioral\Strategy\Models\User;

interface SalaryStrategyInterface
{
    public function calc(array $period, User $user): int;

    public function getName(): string;
}