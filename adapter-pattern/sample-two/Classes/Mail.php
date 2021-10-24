<?php

class Mail
{
    public function SendMailToUser($data)
    {
        return 'sending email to :' . $data['email'];
    }
}
