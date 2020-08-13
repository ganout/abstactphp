<?php


final class PedestrianWay extends HighWay
{
    function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}