<?php

echo '<h1>Funciones predefinidas</h1>';

echo 'var_dump <br>';
$nombre = 'Raymundo Montenegro';
var_dump($nombre);

//echo '<br>';
echo 'Date: ';
echo date('d, m, y');

echo '<br>';

//raiz cuadrada
echo 'Raiz Cuadrada: '.sqrt(9);

echo '<br>';

//random
echo 'Numero random entre 1 y 50: ' . rand(10, 50);

echo '<br>';

//pi
echo ' Numero Pi: ' . pi();

echo '<br>';
echo 'Redondear: ' . round(39,789);

echo '<hr>';
echo '<h1>Mas variables</h1>';

echo 'La variable nombre de tipo: ' . gettype($nombre);
echo '<br>';

if(is_string($nombre)){
    echo 'La variable nombre es String';
}
elseif(is_float($nombre)){
    echo 'La variable nombre es Float';
}

echo '<br>';
if(isset($nombre)){
    echo 'La variable SI existe ';
}else{
    echo 'La variable NO existe';
}

echo '<br>';
$frase = 'Esta    es una    frase con muchos    espacios';
var_dump($frase);
echo 'La funcion trim elimina los espacios en blanco <br>';
echo trim($frase);

echo '<br>';

$car = "ds";
if(empty($car)){
    echo 'La variable car esta vacia';
}else{
    echo 'La variable car no esta vacia';
};

echo '<br>';

//strlen
$cuantoscaracteres = "12312312312";
echo strlen($cuantoscaracteres) .' Caracteres' ;

echo '<br>';

$posicion = "Land Rover";
echo 'La letra o esta en la posicion de Land Rover: ' . strpos($posicion, 'o') ;

echo '<br>';

echo strtolower ($posicion);
echo '<br>';

echo strtoupper ($posicion);