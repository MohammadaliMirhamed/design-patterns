<?php


class whatsapp
{
    public function send_message()
    {
        # code...
    }
}
class telegram
{
    public function send_message_to_user()
    {
        # code...
    }
}


interface notificationAdapter
{
    public function send();
}

class whatsappAdepter implements notificationAdapter
{
    protected $whatsapp;
    public function __construct(whatsapp $whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }
    public function send()
    {
        return $this->whatsapp->send_message();
    }
}

class telegramAdepter implements notificationAdapter
{
    protected $telegram;
    public function __construct(telegram $telegram)
    {
        $this->telegram = $telegram;
    }
    public function send()
    {
        return $this->telegram->send_message_to_user();
    }
}
