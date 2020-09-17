<?php

//Crear un script en php que tenga 4 variables, una de array, otra de tipo string, otra int, y otra boolean
//e imprimir el tipo que sean!

$array = [];
$str = 'Hola a todos';
$int = 13;
$bool = true;

$comprobacion = $bool;

echo '<h2>Comprobacion de tipo de dato de variable</h2>';
echo 'La variable: ';


if (is_integer($comprobacion)){
    echo 'Es entero';
}elseif(is_bool($comprobacion)){
    echo 'Es booleano';
}elseif(is_array($comprobacion)){
    echo 'Es un array';
}elseif(is_string($comprobacion)){
    echo 'Es un string';
}else{
    echo 'Es otro tipo de dato';
}

