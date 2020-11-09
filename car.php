<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface {

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;

    private $energyLevel;

    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->hasParkBrake = $hasParkBrake;
    }

        public function switchOn() :bool
        {
            return true;
        }

        public function switchOff() :bool
        {
            return false;
        }

        public function getEnergy(): int
        {
            return $this->energy;
        }

        public function setEnergy(string $energy) : Car
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

            public function getEnergyLevel(): int
            {
                return $this->energyLevel;
            }

            public function setEnergyLevel(string $energyLevel) : void
            {
                $this->energyLevel = $energyLevel;
            }

            public function getHasParkBreak(): bool
            {
                return $this->hasParkBrake;
            }

            public function setHasParkBreak (bool $hasParkBrake) : void
            {
                $this->hasParkBrake = $hasParkBrake;
            }

    public function setParkBrake() {
        $this->hasParkBrake = false;
    }

    public function start(){
        try {
            if ($this->getHasParkBreak() === true) {
                throw new Exception("La voiture démarre mais a le frein à main, je change celà tout de suite." . "<br>");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return $this->setParkBrake();
        } finally {
            return "Ma voiture roule comme un donut.";
        }
}
}
?>