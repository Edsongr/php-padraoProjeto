<?php 

class Government
{

    public $nameCountry      = "Brazil";
    public $nextElection     = "2026";
    private static $instance = null;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance()
    {

        if(self::$instance === null){
            self::$instance = new Government();
        }

        return self::$instance;
    }

    public  function holdElection()
    {
        echo 'Processando...';
    }

}