<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements lightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        return false;
    }
    public function switchOff()
    {
        return false;
    }
}
