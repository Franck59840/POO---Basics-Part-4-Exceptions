<?php

require_once 'Vehicule.php';

class Trucks  extends Vehicule
{
  
 private $storageCapacity;
 private $loading = 0;

public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity )
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->setStorageCapacity($storageCapacity);
}

    public function setStorageCapacity(int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(){
        return $this->storageCapacity;
    }

    public function setEnergy(string $energy)
    {
            $this->energy = $energy;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function loading() : string
    {
        $sentence = "";
        if ($this->loading < $this->storageCapacity) {
            $sentence .= "In filling";
        }
        if ($this->loading == $this->storageCapacity) {
            $sentence .= "Full";
        }
        return $sentence;

    }

}