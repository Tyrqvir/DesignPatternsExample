<?php


namespace App\Patterns\Behavioral\Strategy\Models;


use Symfony\Component\Uid\Uuid;

class User
{
    private string $uuid;

    public function __construct()
    {
        $this->uuid = Uuid::v4();
    }

    public function departmentName(): string
    {
        $departments = [
            'florist',
            'logist',
            'courier',
        ];
        $key = array_rand($departments);

        return $departments[$key];
    }

    public function getUuid()
    {
        return $this->uuid;
    }
}