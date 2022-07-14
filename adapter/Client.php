<?php 

require_once "./AdapterOne.php";
require_once "./AdapterTwo.php";

class Client 
{
    private $libClient;

    public function __construct()
    {   
        $this->libClient = new AdapterTwo();
    }

    public function main()
    {
        $this->libClient->method1();
        $this->libClient->method2('Edson S');
    }

}