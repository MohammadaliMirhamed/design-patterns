<?php


interface GoingToStrategy
{
    public function travel($country, $passenger);
}


class GoingByCar implements GoingToStrategy
{
    public function travel($country, $passenger)
    {
        return "travel to {$country} by Car with {$passenger} passengers";
    }
}

class GoingByAirplane implements GoingToStrategy
{
    public function travel($country, $passenger)
    {
        return "travel to {$country} by Airplane with {$passenger} passengers";
    }
}

class GoingByTrain implements GoingToStrategy
{
    public function travel($country, $passenger)
    {
        return "travel to {$country} by Train with {$passenger} passengers";
    }
}


class LetsGoTo
{

    protected $goingType;

    public function __construct(GoingToStrategy $goingType)
    {
        $this->goingType = $goingType;
    }

    public function travel($country, $passenger)
    {
        return $this->goingType->travel($country, $passenger);
    }
}


$letsGo = new LetsGoTo(new GoingByAirplane);
echo $letsGo->travel('germany',3);