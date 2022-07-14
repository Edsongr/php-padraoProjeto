<?php 

require_once "./PizzaFactory.php";

$f = new PizzaFactory();

var_dump($f->createFood(1));