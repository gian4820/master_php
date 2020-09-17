<?php

//Cokkie es un fichero que se almacena en e el ordenador del usuario que visita la web 
//con el fin de recordar datos o rastrear cierta informacion o comportamiento
//del mismo en la web. 

//crear cookie
//Primer parametro el nombre, y segundo el valor, caducidad, ruta, y dominio

//Cookie normal
setcookie('nombre', 'Gianfranco Groppo');


//Cookie con expiracion
setcookie('oneyear', 'Valor de cookie de 365 dias', time()+(60*60*24*365));

header('Location: cookie.php');

?>


<a href="cookie.php">Ver cookies</a>