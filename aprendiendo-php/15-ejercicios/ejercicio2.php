<?php
 //Agregar elementos a un array, mientras que la longitud sea menor a 120;

echo '<h2>Agregamos un array con numeros random, y los mostramos por pantalla, tiene que ser de longitud 120</h2>';

$numeros = [];

 for($i = 0; $i<120; $i++){
    $numeros[$i] = rand(1,120);
    echo '<ul><li>'.$numeros[$i].'</li></ul> ';
 }

