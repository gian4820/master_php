<?php

//tomar dos numeros por get desde la url, y realizar los calculos de una calculadora

echo '<h1>Calculadora</h1>';
echo '<h3>Agregue al final de la url: ?n1=numero1&n2=numero2</h3>';
echo '<h4>para que pueda agregar los calculos de la calculadora</h4>';

if(isset($_GET['n1']) && isset($_GET['n2'])){
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
   
    echo '<br> Suma: ' . ($n1 + $n2);
    echo '<br> Resta: ' . ($n1 - $n2);
    echo '<br> Multiplicacion: ' . ($n1 * $n2);
    echo '<br> Division: ' . ($n1 / $n2);



}else{
    echo 'Introduzca parametros por URL';
}
