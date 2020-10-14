<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    if(isset($_POST['name'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
    }else{
        $name = false;
    }
    
    //Array de errores
    $errors = array();
    
    //validar los datos antes de ingresarlos a la db
    //validar nombre
    
    if(!empty($name) && !is_numeric($name)){
        $name_validate= true;
    }else{
        $name_validate = false;
        $errors ['name'] = 'Name error';
    }
    
    //Si no existen errores al traer los datos, entonces los guardo en la db
    if(count($errors) == 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$name');";
        $save = mysqli_query($db, $sql);
    }
}

header("Location: index.php");



