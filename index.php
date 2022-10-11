<?php
require_once 'Bicycle.php';
$bike = new Bicycle('blue', 1);
$bike->color = 'blue';
$bike->currentSpeed = 2;
var_dump($bike);
echo $bike->forward();
echo $bike->brake();

require_once 'Car.php';
$renault = new Car('green', 4, 'essence');
$renault->setEnergyLevel(5);

var_dump($renault);
echo $renault->forward();
echo $renault->brake();

$velov = new Bicycle('red', 1);
echo $velov->forward();
var_dump($velov);

var_dump(Car::ALLOWED_ENERGIES);
require_once 'Truck.php';
$truck = new Truck(100, 'green', 4, 'fuel');
$truck->loading = 100;
echo $truck->full(100, 100);
var_dump($truck);
