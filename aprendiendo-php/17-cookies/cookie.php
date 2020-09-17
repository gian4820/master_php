<?php

//para mostrar le valor de las cookies, tengo que usar $_COOKIE, que es una variable 
//superglobal, array asociativo

if(isset($_COOKIE['nombre'])){
    echo '<h1>'.$_COOKIE['nombre'].'</h1>';
}
else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['oneyear'])){
    echo '<h2>'.$_COOKIE['oneyear'].'</h2>';
}else{
    echo 'No existe esa cookie';
}


?>
<a href="crear.php">Crear cookies</a>
<a href="borrar.php">Borrar cookies</a>