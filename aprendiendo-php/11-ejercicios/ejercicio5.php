<?php

//Mostrar todos los numeros que nos llegan por parametro Get

echo '<h2>Ingresar dos numeros por parametro, por URL, y mostrara todos los numeros entre esos dos</h2>';
echo '<h3>Para eso ingresar despues de la URL ?n1=numero1&n2=numero2</h3>';
echo 'La palabra numero1 y numero2, reemplazarla por el numero que desees <br>';

if(isset($_GET['n1']) && isset($_GET['n2'])){
        
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    for($n1; $n1<=$n2; $n1++){
        echo $n1 . '<br>';
    }


}
else{
    echo 'Ingresar 2 numeros por URL';
}