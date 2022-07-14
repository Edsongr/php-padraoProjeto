<?php 

require_once './Observable.php';

class Climate extends Observable
{
    private $temperature;

    public function __construct($temperature)
    {
        $this->temperature = $temperature;
    }

    public function updateTemp($temperature)
    {
        $this->temperature = $temperature;
        $this->notifyObservers();
    }

    public function getTemp()
    {
        return $this->temperature;
    }

}