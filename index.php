<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
$bike = new Bicycle('red', 1);
$citroen = new Car("green", 5, "gasoline", true);
$renault = new Car("blue", 4, "gasoline", false);

$bike->setCurrentSpeed(15);

if ($bike->switchOn() === true) {
    echo "my bike lights are on";
} else {
    echo "my bike lights are off";
}


$date = new DateTime;
var_dump($date);

echo $citroen->start();
echo '<br>';
echo $citroen->forward();
echo '<br> Vitesse de la voiture : ' . $citroen->getCurrentSpeed() . ' km/h' . '<br>';
echo $citroen->brake();
echo '<br> Vitesse de la voiture : ' . $citroen->getCurrentSpeed() . ' km/h' . '<br>';
echo $citroen->brake();
echo '<br>';
echo '<br>';

var_dump($citroen);

echo $renault->start();
echo '<br>';

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
echo '<br>';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br>';
echo '<br>';

$citroen = new Car('green', 4, 'electric', true);
echo $citroen->forward();

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('blue', 2, 3, 'fuel');
echo '<br>';
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br>';

echo '<br>';
echo $truck->fill();
echo '<br>';

$bigTruck = new Truck('blue', 2, 0, 'electric');
echo '<br>';
echo $bigTruck->fill();
echo '<br>';

$road = new MotorWay();
$street = new ResidentialWay();
$path = new PedestrianWay();

$ferrari = new Car("green", 5, "gasoline", true);
$skateboard = new Skateboard("red", 4);

$road->addVehicle($citroen);
$road->addVehicle($ferrari);
$road->addVehicle($bike);
var_dump($road);

$street->addVehicle($truck);
$street->addVehicle($ferrari);
$street->addVehicle($bike);
var_dump($street);

$path->addVehicle($skateboard);
$path->addVehicle($ferrari);
$path->addVehicle($bike);
var_dump($path);
