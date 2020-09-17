<?php

//Aca veremos las variables locales y globales

$nombre = 'Gianfranco Groppo';
echo '<h1>'. $nombre. '</h1>';

function nombre_completo(){
    //aca se declara como global, para que podamos acceder a la variable global en la funcion
    global $nombre;
    echo $nombre . '<br>';
    $year = 1988;
    echo $year;

}

nombre_completo();

