<?php 

require_once "./File.php";
require_once "./DirectoryEso.php";

$filesCourse = new DirectoryEso("Pasta de Cursos");

$coursePHP  = new File("CursoPHP.zip");
$courseJava = new File("CursoJava.zip");
$courseC3   = new File("CursoC#.zip");

$filesCourse->add($coursePHP);
$filesCourse->add($courseJava);
$filesCourse->add($courseC3);


$filesCourse->ls();