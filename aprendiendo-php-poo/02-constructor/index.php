<?php

require_once 'car.php';

$car1 = new car('red','Lamborghini', 'Diablo', '5.0', 603, 2);
$car2 = new car('green','Vw', 'Gol', '1.8', 105, 5);


//Modificamos el atributo del objeto car PUBLIC
$car1->color="blue";
//Modificamos el atributo del objeto car Protected, pero con una funcion setBrand definida como public
$car1->setBrand('Reanult');

/*
echo 'Cambiamos el modelo de private:';
var_dump($car1->getModel());

echo 'Mostramos todos los campos de car con las propiedes cambiadas: ';
var_dump($car1);

echo "<br>";
*/

echo $Car->showInfo($car12);