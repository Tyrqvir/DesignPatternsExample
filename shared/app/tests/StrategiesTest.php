<?php

namespace App\Tests;

use App\Patterns\Behavioral\Strategy\Models\User;
use App\Patterns\Behavioral\Strategy\SalaryManager;
use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class StrategiesTest extends TestCase
{
    public function test(): void
    {
        $user1 = new User();
        $user2 = new User();
        $collection = new ArrayCollection([$user1, $user2]);
        $period = [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth(),
        ];
        $manager = new SalaryManager($period, $collection);
        dump($manager->handle());
    }

}
