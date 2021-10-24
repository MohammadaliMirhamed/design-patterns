<?php

interface timeZone
{
    public function getTime(): string;
}

class asiaTimeZone implements timeZone
{
    public function getTime(): string
    {
        return 'time in Asia';
    }
}

class AmericaTimeZone implements timeZone
{
    public function getTime(): string
    {
        return 'time in America';
    }
}

//---------------

interface TimeZoneFactory
{
    public  function CreateTimeZone(): timeZone;
}


class AsiaZoneFactory implements TimeZoneFactory
{
    public  function CreateTimeZone(): timeZone
    {
        return new asiaTimeZone;
    }
}

class AmericaZoneFactory implements TimeZoneFactory
{
    public  function CreateTimeZone(): timeZone
    {
        return new AmericaTimeZone;
    }
}


$TimeZoneFactory = new AmericaZoneFactory();
$America = $TimeZoneFactory->CreateTimeZone();
return $America->getTime();