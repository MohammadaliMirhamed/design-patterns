<?php

require_once "NotificationAdapter.php";
require_once "./Classes/Telegram.php";

class TelegramAdapter implements NotificationAdapter
{
    protected $telegram;
    
    public function __construct(Telegram $telegram)
    {
        $this->telegram = $telegram;
    }

    public function send(array $data)
    {
        return $this->telegram->SendMailToUser($data);
    }
}
