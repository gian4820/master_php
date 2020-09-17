<?php

//constantes
// primero es el nombre de la variable, y despues el contenido de la misma
// se muestran sin el signo $

define('nombre', 'Gianfranco Groppo');
define('dni', '33598730');
$edad = '32';

echo '<h2>Estas son constantes</h2>';
echo '<h3>' . nombre . '</h3>';
echo '<h3>'. dni .'</h3>';
echo '<br>';

echo '<h2>Esto es una variable</h2>';
echo "<h3>$edad esto es una variable</h3>";


//constantes predefinidas
echo 'El sistema operativo que estas utilizando es: ' . PHP_OS . '<br>';
echo 'Version de PHP: ' . PHP_VERSION . '<br>';
echo 'Este archivo esta en la ruta: ' . __FILE__ ;

?>