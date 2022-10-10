<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->currentSpeed = 5;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        $this->energyLevel > 0;
        return "Start !";
    }


    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbWheels = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
