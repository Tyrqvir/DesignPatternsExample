<?php


namespace App\Patterns\Fundamental\Delegation\Messengers;


class EmailMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        dump("Sent by ".__METHOD__);

        return parent::send();
    }
}