<?php


namespace App\Patterns\Fundamental\EventChannel\Interfaces;


interface EventChannelInterface
{
    /**
     * Издатель уведомляет канал о том что надо
     * всех кто подписан на тему $topic уведомить данными $data
     */
    public function publish($topic, $data);

    /**
     * Подписчик $subscriber подписывается на событие (данные) $topic
     */
    public function subscribe($topic, SubscriberInterface $subscriber);
}