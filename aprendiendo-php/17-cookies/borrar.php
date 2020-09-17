<?php

//borrar cookie

if(isset($_COOKIE['nombre'])){
    unset($_COOKIE['nombre']);
    //caducamos la cookie para eliminar
    setcookie('nombre', '', time()-100);
}

//header es una funcion para cambiar las cabeceras, y me redirecciona a otro sitio
//lo que hace, es que si no detecta borrar cookies, se queda en cookie.php
header('Location: cookie.php');
