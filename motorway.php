<?php
require 'HighWay.php';
class MotorWay extends HighWay {

    public $currentVehicles;

    public function __construct(int $nbLane, int $maxSpeed)
{
    parent::__construct(4, 130);
    $this->currentVehicles = [];
}
    public function addVehicles(Vehicle $vehicles): void
{
    $typeVehicles = get_class($vehicles);
    if($typeVehicles === "Car") $this->currentVehicles[] = $vehicles;
}

}