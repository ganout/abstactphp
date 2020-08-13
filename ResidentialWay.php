<?php


final class ResidentialWay extends HighWay
{
    function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicule(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}