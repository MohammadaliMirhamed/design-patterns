<?php

interface observer
{
    public function eventHandler($data);
}

interface publisher
{
    public function attach(observer $observer);
    public function unattach(observer $observer);
    public function notify($data);
}

interface registration
{
    public function validation();
    public function createUser();
}


class someWebsiteUserRegister implements publisher, registration
{

    protected $observers = [];

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function validation()
    {
        $err = [];
        foreach ($this->data as $key => $value) {
            if (!isset($value)) {
                $err[] =  $key . ' is required.';
            }
        }

        if (count($err) > 0) {
            return [
                'status' => 'error',
                'errors' => $err
            ];
        } else {
            return true;
        }
    }

    public function createUser()
    {
        $validation = $this->validation();
        if ($validation) {
            return json_encode(['meg' => 'User Created!!', 'event' => $this->notify($this->data)]);
        } else {
            return $validation['errors'];
        }
    }

    public function attach(observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function unattach(observer $observer)
    {
        if (in_array($observer, $this->observers)) unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notify($data)
    {
        $sent = [];
        foreach ($this->observers as $observer) {
            $sent[] = $observer->eventHandler($data);
        }
        return $sent;
    }
}


class userNotifiy implements observer
{
    public function eventHandler($data)
    {
        return 'dear ' . $data['first_name'] . ' you has registered in the system';
    }
}

class adminNotifiy implements observer
{
    public function eventHandler($data)
    {
        return 'dear admin a user with this email :' . $data['email'] . ' has registered in the system';
    }
}


$register = new someWebsiteUserRegister(['first_name' => 'Alex', 'lastname' => 'Doune', 'email' => 'alex1995@gmail.com', 'password' => 123456]);
$register->attach(new userNotifiy);
$register->attach(new adminNotifiy);
echo $register->createUser();
