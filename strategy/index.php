<?php 

require_once "./MySql.php";
require_once "./SqlServer.php";
require_once "./PostgreSql.php";

$bd = new SqlServer();
$bd->select();