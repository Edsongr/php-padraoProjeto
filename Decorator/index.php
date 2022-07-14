<?php 

require_once "./IceCream.php";
require_once "./Granulated.php";
require_once "./Strawberry.php";


$ic     = new IceCream();
$straw  = new Strawberry($ic);
$granu  = new Granulated($ic);

$baguncaBoa = new Granulated(new Strawberry(new IceCream()));

echo "Current Price Normal: " . $ic->price() . "<br>";
echo "Current Price Strawberry: " . $straw->price() . "<br>";
echo "Current Price Granulated: " . $granu->price() . "<br>";
echo "Current Price Bagunça boa: " . $baguncaBoa->price() . "<br>";