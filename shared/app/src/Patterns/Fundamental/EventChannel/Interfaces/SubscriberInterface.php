<?php


namespace App\Patterns\Fundamental\EventChannel\Interfaces;


interface SubscriberInterface
{
    /**
     * Уведомляет подписчика
     */
    public function notify($data);

    public function getName();
}