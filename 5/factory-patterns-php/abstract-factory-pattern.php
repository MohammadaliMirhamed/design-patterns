<?php

interface time
{
    public function getTime(): string;
}

class asiaTime implements time
{
    public function getTime(): string
    {
        return 'time in Asia';
    }
}

class AmericaTime implements time
{
    public function getTime(): string
    {
        return 'time in America';
    }
}

//---------------
interface date
{
    public function getDate(): string;
}

class asiaDate implements date
{
    public function getDate(): string
    {
        return 'date in Asia';
    }
}

class AmericaDate implements date
{
    public function getDate(): string
    {
        return 'date in America';
    }
}

//---------------

interface TimeAndDateFactory
{
    public  function CreateTime(): time;
    public  function CreateDate(): date;
}


class AsiaFactory implements TimeAndDateFactory
{
    public  function CreateTime(): time
    {
        return new asiaTime;
    }

    public  function CreateDate(): date
    {
        return new asiaDate;
    }
}

class AmericaFactory implements TimeAndDateFactory
{
    public  function CreateTime(): time
    {
        return new AmericaTime;
    }

    public  function CreateDate(): date
    {
        return new AmericaDate;
    }
}


$TimeFactory = new AmericaFactory();
$AmericaTime = $TimeFactory->CreateTime();
$AmericaDate = $TimeFactory->CreateDate();
echo $AmericaTime->getTime() . ' - ' .  $AmericaDate->getDate();
