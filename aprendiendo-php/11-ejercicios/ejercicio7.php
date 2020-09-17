<?php

//Mostrar todos los numeros impares, entre dos numeros ingresados por URL
echo '<h1>Numeros Impares</h1>';
echo '<h3>Ingresar dos numeros por URL, y mostrara todos los imapres entre esos dos</h3>';
echo '<h5>Al final de la URL escribir: ?n1=numero1&n2=numero2</h5>';


if (isset($_GET['n1']) && isset($_GET['n2'])){
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

        for ($n1; $n1<=$n2; $n1++){
            if($n1 % 2 == 1){
                echo $n1 . '<br>';
            }
        }

}else{
    echo '<h4>Ingrese dos numeros por URL correctamente</h4>';
}


