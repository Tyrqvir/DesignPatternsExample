<?php


namespace App\Patterns\Fundamental\EventChannel\Classes;


use App\Patterns\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use App\Patterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private array $topic = [];

    public function publish($topic, $data)
    {
        if (empty($this->topic[$topic])) {
            return;
        }

        foreach ($this->topic[$topic] as $subscriber) {
            /**
             * @var SubscriberInterface $subscriber
             */
            $subscriber->notify($data);
        }
    }

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topic[$topic][] = $subscriber;
        dump("{$subscriber->getName()} подписан на [{$topic}]");
    }
}