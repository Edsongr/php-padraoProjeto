<?php 

require_once './Observer.php';
require_once './Climate.php';

class PrinterInfo implements Observer 
{
    private $observableClimate;

    public function __construct(Climate $observableClimate)
    {
        $this->observableClimate = $observableClimate;
        $this->observableClimate->addObservers($this);
    }

    public function update()
    {
        echo "Current temperature: " . $this->observableClimate->getTemp() . "<br>";
    }

}