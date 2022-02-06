<?php

namespace App\Tests;

use App\Patterns\Fundamental\EventChannel\Classes\EventChannel;
use App\Patterns\Fundamental\EventChannel\Classes\Publisher;
use App\Patterns\Fundamental\EventChannel\Classes\Subscriber;
use PHPUnit\Framework\TestCase;

class EventChannelTest extends TestCase
{
    public function testSomething(): void
    {
        $newChannel = new EventChannel();

        $highGardenGroup = new Publisher('highgarder-news', $newChannel);
        $winterfellDaily = new Publisher('winterfell-news', $newChannel);

        $sansa = new Subscriber('Sansa Stark');
        $arya = new Subscriber('Arya Stark');
        $snow = new Subscriber('Jon snow');

        $newChannel->subscribe('highgarder-news', $sansa);
        $newChannel->subscribe('winterfell-news', $arya);
        $newChannel->subscribe('winterfell-news', $snow);
        $highGardenGroup->publish('New highGardenGroup post');
        $winterfellDaily->publish('New winterfellDaily post');
    }
}
