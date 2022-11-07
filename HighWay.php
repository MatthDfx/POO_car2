<?php

abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

public function __construct()
{
    
}
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}
