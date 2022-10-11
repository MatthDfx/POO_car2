<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading;

    public function __construct($storageCapacity, $color, $nbSeats, $energy)
    {
        $this->storageCapacity = $storageCapacity;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getloading(): int
    {
        return $this->loading;
    }

    public function setloading(int $loading)
    {
        $this->loading = $loading;
    }
    public function full(): string
    {
        if ($this->storageCapacity >= $this->loading) {
            return 'in filling';

            return 'full';
        }
    }
};
