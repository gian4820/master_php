<?php

//Creamos la conexion
require_once 'includes/conexion.php';


if(isset($_POST)){
    //recogemos los datos del formulario de actualizacion
    //Lo que hacemos abajo es como una condicion if el ? hace la senetencia true, y el else es el :
    $name = isset($_POST['name']) ? mysqli_real_escape_string ($db, $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($db, $_POST['lastname']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string ($db,  $_POST['password']) : false;


     //Array de errores
     $errores = array();   


    //validamos los datos antes de ingresarlos a DB
    //Validacion name
    if(!empty($name) && !is_numeric($name) && !preg_match("/0-9/", $name)){
        $name_validate= true;
    }else{
        $errores ['name'] = 'Name error';
        $name_validate = false;
    }

    //Validacion lastname
    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/0-9/", $lastname)){
        $lastname_validate= true;
    }else{
        $errores ['lastname'] = 'Lastname error';
        $lastname_validate = false;
    }


      //Validacion Password
      if(!empty($password)){
        $password_validate= true;
    }else{
        $errores ['password'] = 'Password null';
        $password_validate = false;
    }
    //var_dump($errores);

    $save_user = false;

    if(count($errores) == 0){
        $save_user = true;

        /*Ciframos la password
        Le agregamos la variale security_pass, y la funcion password_hash, crea el hash con
        el tipo de cifrado PASSWORD_BCRYPT, y luego cost 4, dice que la encripta cuatro veces, 
        en cost puedo poner la cantidad de veces que yo quiera encriptarla*/

        $security_pass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //Actualizamos usuario
        $user = $_SESSION['user'];
        $sql = "UPDATE usuarios SET " . 
                "nombre = '$name', apellido = '$lastname', password = '$security_pass'" .
                "WHERE id = " . $user['id'];
        ;
        $save = mysqli_query($db, $sql);

        if($save){
            $_SESSION['user']['name'] = $nombre;
            $_SESSION['user']['lastname'] = $lastname;
            $_SESSION['user']['password'] = $security_pass;


            $_SESSION['finished'] = "User updated!!";
        } else{
            $_SESSION['errores']['general'] = "Error to update the user";
        }

    }else{
        //Si existen errores en el registo de usuarios...
        $_SESSION['errores'] = $errores;
    }
}
header('Location: account.php');







?>