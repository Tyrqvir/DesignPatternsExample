<?php


namespace App\Patterns\Fundamental\EventChannel\Interfaces;


interface PublisherInterface
{
    /**
     * Уведомление подписчиков
     */
    public function publish($data);
}