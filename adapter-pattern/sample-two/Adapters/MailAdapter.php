<?php

require_once "NotificationAdapter.php";
require_once "./Classes/Mail.php";

class MailAdapter implements NotificationAdapter
{
    protected $mail;
    
    public function __construct(Mail $mail) {
        $this->mail = $mail;
    }

    public function send(array $data) {
        return $this->mail->SendMailToUser($data);
    }
}
