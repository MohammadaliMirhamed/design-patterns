<?php

class Telegram
{
    public function SendMailToUser($data)
    {
        return 'sending Message To Telegram id :' . $data['username'];
    }
}
