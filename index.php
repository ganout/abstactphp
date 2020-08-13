<?php

require "Vehicle.php";
require "Car.php";
require "Bike.php";
require "Skateboard.php";

require "HighWay.php";
require "MotorWay.php";
require "ResidentialWay.php";
require "PedestrianWay.php";

$mySkateboard1 = new Skateboard("skate1");
$mySkateboard2 = new Skateboard("skate2");
$mySkateboard3 = new Skateboard("skate3");
$myBike1 = new Bike("bike1");
$myBike2 = new Bike("bike2");
$myBike3 = new Bike("bike3");
$myCar1 = new Car("car1");
$myCar2 = new Car("car2");
$myCar3 = new Car("car3");

$A10 = new MotorWay();
$block12 = new ResidentialWay();
$gr20 = new PedestrianWay();

$A10->addVehicule($mySkateboard1);
$A10->addVehicule($mySkateboard2);
$A10->addVehicule($mySkateboard3);
$A10->addVehicule($myBike1);
$A10->addVehicule($myBike2);
$A10->addVehicule($myBike3);
$A10->addVehicule($myCar1);
$A10->addVehicule($myCar2);
$A10->addVehicule($myCar3);

$block12->addVehicule($mySkateboard1);
$block12->addVehicule($mySkateboard2);
$block12->addVehicule($mySkateboard3);
$block12->addVehicule($myBike1);
$block12->addVehicule($myBike2);
$block12->addVehicule($myBike3);
$block12->addVehicule($myCar1);
$block12->addVehicule($myCar2);
$block12->addVehicule($myCar3);

$gr20->addVehicule($mySkateboard1);
$gr20->addVehicule($mySkateboard2);
$gr20->addVehicule($mySkateboard3);
$gr20->addVehicule($myBike1);
$gr20->addVehicule($myBike2);
$gr20->addVehicule($myBike3);
$gr20->addVehicule($myCar1);
$gr20->addVehicule($myCar2);
$gr20->addVehicule($myCar3);

echo "motorWay : ";
showAllVehicle($A10);
echo "\n";
echo "residentialWay : ";
showAllVehicle($block12);
echo "\n";
echo "pedestrianWay : ";
showAllVehicle($gr20);

function showAllVehicle($way) {
    foreach ($way->currentVehicles as $vehicle) {
        echo " | " . $vehicle->getName();
    }
}