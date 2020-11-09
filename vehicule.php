<?php

// Vehicule.php

abstract class Vehicle
{
    protected $color;

    protected $nbSeats;

    protected $nbWheels;

    abstract public function __construct();

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}

// Cars.php

class Car extends Vehicle
{
    protected $color;
    
    protected $nbWheels;

    protected $nbSeats;

    private $hasParkBrake;

    public function __construct()
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    public function getHasParkBrake()
    {
        return $this->$HasParkBrake;
    }
    public function setHasParkBrake(bool $HasParkBrake): void
    {
            $this->HasParkBrake = $HasParkBrake;
    }
    function start(bool $HasParkBrake)
    {
       if ($HasParkBrake == false) {
           throw new Exception("You can't start !");
       }
       else
       {
           echo "You can go !";
       }
    }
}