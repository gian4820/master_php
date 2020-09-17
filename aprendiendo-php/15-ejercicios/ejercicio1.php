<?php

//Un array con 8 numeros, recorrerlo y mostrarlo, ordenarlo y mostrarlo, mostrar longitud, y buscar en el array

$numeros = [41, 25, 73, 43, 5, 66, 77, 348];


echo '<h2>Mostramos el array: </h2>';
foreach ($numeros as $numero) {
    echo '<li>'.$numero.'</li>';
}

echo '<h2>Mostramos elementos ordenados</h2>';
 sort($numeros);
 var_dump($numeros);

 echo '<h2>Cantidad de elementos del array: </h2>';
 var_dump(count($numeros));

 echo '<h2>Buscamos en el array el elemento 41: </h2>';
 if(array_search('421', $numeros) == true){
     echo 'El numero esta en la posicion: ';
     echo  var_dump(array_search('421', $numeros));
 }else{
     echo 'El numero indicado no esta en el array!';
 }

