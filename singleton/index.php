<?php 

require "./Government.php";

$nameCountry = Government::getInstance()->nameCountry;
$nextElection = Government::getInstance()->nextElection;

var_dump( $nameCountry, $nextElection );