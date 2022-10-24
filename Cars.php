<?php

require_once 'Vehicule.php';

class Cars extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel','electric',
    ];
    private string $energy;
    private int $energyLevel;
    private $hasParkBrake;
    


    public function __construct(string $color, int $nbSeats, string $energy)
    {
       parent:: __construct($color, $nbSeats);
       $this->energy = $energy;
    }
    

    public function setEnergy(string $energy): void
    {    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
         $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }



    public function setParkBrake()
    {
        if ($this->hasParkBrake == true)
        {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake == false)
        {
            $this->hasParkBrake = true;
            return 'Mise du frein à main.</br>';
        }
        return $this;
    }

    public function start(): string
    {
        if ($this->hasParkBrake == true)
        {
            throw new Exception('Impossible d\'avancer. Veuillez débloquer le frein à main.');
        } else {
            return "Moteur en marche, frein à main enlever, prêt à partir: Vroouumm Vvvvrrrooouummm!";
        }}
    }


