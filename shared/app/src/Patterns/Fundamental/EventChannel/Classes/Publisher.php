<?php


namespace App\Patterns\Fundamental\EventChannel\Classes;


use App\Patterns\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use App\Patterns\Fundamental\EventChannel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private string $topic;
    private EventChannelInterface $eventChannel;

    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}