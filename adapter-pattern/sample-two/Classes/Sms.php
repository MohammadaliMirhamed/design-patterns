<?php

class Sms
{
    public function send($data)
    {
        return 'sending sms to :' . $data['phone'];
    }
}
