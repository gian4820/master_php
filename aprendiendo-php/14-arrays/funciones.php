<?php

$peleadores = ['Jon Bones Jones', 'Daniel Cormier', 'Miocic', 'Nganou'];

//funciones para con arrays
echo '<h1>Funciones de los array</h1>';


//Ordenar
echo '<h2>Ordenamos el array</h2>';
sort($peleadores);
var_dump($peleadores);

//Agregamos un elemento al array
echo '<h2>Agregamos elementos al array</h2>';
$peleadores[] = 'Spyder Silva';
array_push($peleadores, 'Mike Perry');
var_dump($peleadores);


//elimina el ultimo elemento
//array_pop($peleadores);

//Elimina el elemeneto uno
//unset($peleadores[1]);

//Elimina aleatorio
//$i = array_rand($peleadores);

//Buscar dentro del array
echo '<h2>Buscamos dentro del array el elemento Mike Perry</h2>';
$busqueda = array_search('Mike Perry', $peleadores);
var_dump($busqueda);

//Contamos numeros de elementos
echo '<h2>Contamos los numeros de elementos</h2> ';
var_dump(count($peleadores));