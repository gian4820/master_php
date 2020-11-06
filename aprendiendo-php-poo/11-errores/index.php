<?php

//Capturar excepciones cuando haya un error en el codigo

try{
    if(isset($_GET['id'])){
        echo "El parametro es: {$_GET['id']}";
    }else{
        throw new Exception('Faltan parametros en la url');
    }
}
catch(Exception $e){
    echo "Hay un error: ". $e->getMessage();
}