<?php
require_once ("HighWay.php");

class ResidentialWay extends HighWay {

    public $currentVehicles;

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
        $this->currentVehicles = array();
    }

    public function addVehicles(Vehicle $vehicles): void
    {
        $this->currentVehicles[] = $vehicles;
    }
}
