<?php


final class MotorWay extends HighWay
{
    function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}