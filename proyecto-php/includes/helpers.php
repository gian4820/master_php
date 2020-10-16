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
        $delet = true;
    };

    if(isset($_SESSION['errors_input'])){
        $_SESSION['errors'] = null;
        $delet = true;
    };


    if(isset($_SESSION['finished'])){
        $_SESSION['finished'] = null;
        $delet = true;
    }
    
    return $delet;
}

//traemos las cateogiras de la DB
function listCategories($conexion){
    $sql = "SELECT * FROM categorias ORDER BY nombre ASC;";
    $categories = mysqli_query($conexion, $sql);

    $result = array();
    if($categories && mysqli_num_rows($categories) >= 1){
        $result = $categories;
    }
    
    return $result;
}


//Traemos las entradas de la DB
function lastInputs($conexion){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e " . 
            "INNER JOIN categorias c ON e.categoria_id = c.id " . 
            "ORDER BY e.id DESC LIMIT 4";

    $inp = mysqli_query($conexion, $sql);
    $result = array();

    if($inp && mysqli_num_rows($inp) >= 1){
        $result = $inp;
    }

    return $result;
}


