<?php

namespace App\Patterns\Behavioral\Strategy;

use App\Patterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use App\Patterns\Behavioral\Strategy\Models\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Exception;

class SalaryManager
{
    private SalaryStrategyInterface $salaryStrategy;
    private array $period;
    private Collection $users;


    public function __construct(array $period, Collection $users)
    {
        $this->period = $period;
        $this->users = $users;
    }

    public function handle(): Collection
    {
        $userSalary = $this->calculateSalary();
        $this->saveSalary($userSalary);

        return $userSalary;
    }

    private function calculateSalary(): Collection
    {
        return $this->users->map(
            function (User $user) {
                $strategy = $this->getStrategyByUser($user);
                $salary = $this
                    ->setCalculateStrategy($strategy)
                    ->calculateUserSalary($this->period, $user);

                $strategyName = $strategy->getName();
                $userId = $user->getUuid();

                return new ArrayCollection([
                    'uuid' => $userId,
                    'salary' => $salary,
                    'strategyName' => $strategyName,
                ]);
            }
        );
    }

    /**
     * @throws Exception
     */
    private function getStrategyByUser(User $user): SalaryStrategyInterface
    {
        $strategyName = $user->departmentName().'Strategy';
        $strategyClass = __NAMESPACE__.'\\Strategies\\'.ucwords($strategyName);
        if (!class_exists($strategyClass)) {
            throw new Exception("Class not exist [${$strategyClass}]");
        }

        return new $strategyClass();
    }

    private function calculateUserSalary(array $period, User $user): int
    {
        return $this->salaryStrategy->calc($period, $user);
    }

    private function setCalculateStrategy(SalaryStrategyInterface $strategy): self
    {
        $this->salaryStrategy = $strategy;

        return $this;
    }

    private function saveSalary(Collection $userSalary): void
    {
        print_r('saveSalary');
    }
}