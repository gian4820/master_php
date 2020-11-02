<?php

include_once 'clases.php';

//Nuevo objeto de Persona llamado Jose
$jose = new Person;
$jose ->setName('Jose');
$jose ->setSurname('Alvarez');
$jose ->setAge(21);
$jose ->setHeight(175);

var_dump($jose);



//nuevo obj de informatico
$linux = new Informatic();

$linux ->setName('Linux');
$linux ->setSurname('OS');




var_dump($linux);
echo $linux ->hablar();
echo "<br>";
echo $linux ->programador();
