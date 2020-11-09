<?php
abstract class HighWay {

    /**
     * @var array
     */
    private $currentVehicles;

    /**
     * @var integer
     */
    private $nbLane;

    /**
     * @var integer
     */
    private $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = [];
    }

    abstract public function addVehicles(Vehicle $vehicle): void ;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles ): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setnbLane(int $nbLane):void
    {
        $this->nbLane = $nbLane;
    }
    public function getMaxSpeed (): int
    {
        return $this-> nbLane;
    }
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this-> maxSpeed = $maxSpeed;
    }
}
