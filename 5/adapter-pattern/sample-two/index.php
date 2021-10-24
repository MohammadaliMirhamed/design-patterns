<?php


require_once 'Classes/Sms.php';
require_once 'Classes/Mail.php';
require_once 'Classes/Telegram.php';

require_once "Adapters/SmsAdapter.php";
require_once "Adapters/MailAdapter.php";
require_once "Adapters/TelegramAdapter.php";


$sms = new SmsAdapter(new Sms());
echo $sms->send(['name' => 'ali', 'phone' => '09373170379']) . '<br/>';

$mail = new MailAdapter(new Mail);
echo $mail->send(['name' => 'hasan', 'email' => 'hasan@gmail.com']) . '<br/>';

$telegram = new TelegramAdapter(new Telegram);
echo $telegram->send(['name' => 'sara', 'username' => 'sara1995']) . '<br/>';
