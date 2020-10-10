<?php

function showErrors($errores, $fill){
    $alert = '';
    if(isset($errores[$fill]) && !empty($fill)){
        $alert = "<div class='alerta alerta-error'>". $errores[$fill] ."</div>";
    }
    return $alert; 
}

function deleteErrors(){
    $delet = false;

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $delet = session_unset();
    };

    if(isset($_SESSION['finished'])){
        $_SESSION['finished'] = null;
        $delet = session_unset();
    }
    
    return $delet;
}