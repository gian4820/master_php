<?php

//Iniciar Sesion
session_start();

//variable local
$auto = 'Es una variable local';

//variable sesion
$_SESSION['variable_persistente'] = 'Hola soy una sesion activa';

echo $auto. '<br>';
echo $_SESSION['variable_persistente'];

