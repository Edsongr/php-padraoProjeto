<?php 

require_once './Climate.php';
require_once './PrinterInfo.php';


$clim       = new Climate(10);
$printClient= new PrinterInfo($clim);

$clim->updateTemp(13);


$clim->updateTemp(7);


$clim->updateTemp(0);


$clim->updateTemp(25);