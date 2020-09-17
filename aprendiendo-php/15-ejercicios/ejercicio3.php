<?php

//compruebe si una variable esta vacia, y decir si esta vacio, 
//rellenarlo, con minuscula, y convertirlo en mayuscula y negrita;

$auto ='';
if(empty($auto)){
    echo 'Variable auto: ';
    $auto = 'bmw';
    echo $auto .  '<br>';
    echo 'Convertido a Upper: ';
    $upper =  strtoupper($auto);
    echo $upper . '<br>';
    echo 'Convertido a Strong: ';
    echo '<strong>'.$upper.'</strong>';
}
else{
    echo 'La variable no esta vacia!';
}