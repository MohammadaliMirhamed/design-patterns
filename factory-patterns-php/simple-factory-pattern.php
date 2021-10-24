<?php

class timeAndDate
{
    public function getTimeStamp()
    {
        return time();
    }
    
    public function getTodayDate()
    {
        return  "Today is " . date("l");

    }
}


class SimpleFactory 
{
    public function createTime()
    {
        return new timeAndDate();
    }
}


$factory = new SimpleFactory;
$time = $factory->createTime();
echo $time->getTimeStamp();