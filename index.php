<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 2;
var_dump($bike);
echo $bike->forward();
echo $bike->brake();

require_once 'Car.php';
$renault = new Car('green', 4, 'essence');
$renault->setEnergyLevel(5);

var_dump($renault);
echo $renault->start();
echo $renault->forward();
echo $renault->brake();
