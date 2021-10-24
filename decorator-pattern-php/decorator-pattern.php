<?php

interface phone
{
    public function addFeatuer();
}

class callFeature implements phone
{
    public function addFeatuer()
    {
        return ['CALL'];
    }
}

class gpsDecorator implements phone
{
    protected $phone;

    public function __construct(phone $phone)
    {
        $this->phone = $phone;
    }

    public function addFeatuer()
    {
        return array_merge($this->phone->addFeatuer(), ['GPS']);
    }
}

class smsDecorator implements phone
{
    protected $phone;

    public function __construct(phone $phone)
    {
        $this->phone = $phone;
    }

    public function addFeatuer()
    {
        return array_merge($this->phone->addFeatuer(), ['SMS']);
    }
}

class blueToothDecorator implements phone
{
    protected $phone;

    public function __construct(phone $phone)
    {
        $this->phone = $phone;
    }

    public function addFeatuer()
    {
        return array_merge($this->phone->addFeatuer(), ['BLUETOOTH']);
    }
}


$iphone = new callFeature();
$iphone = new blueToothDecorator($iphone);
$iphone = new smsDecorator($iphone);
$iphone = new gpsDecorator($iphone);
echo json_encode($iphone->addFeatuer());