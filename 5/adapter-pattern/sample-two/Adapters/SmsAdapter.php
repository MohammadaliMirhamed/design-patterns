<?php

require_once "NotificationAdapter.php";
require_once "./Classes/Sms.php";

class SmsAdapter implements NotificationAdapter
{
    protected $sms;
    
    public function __construct(Sms $sms)
    {
        $this->sms = $sms;
    }

    public function send(array $data)
    {
        return $this->sms->send($data);
    }
}
