<?php

//Creamos la conexion
require_once 'includes/conexion.php';

//Iniciamos la sesion
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST)){
    //recogemos los datos del formulario
    //Lo que hacemos abajo es como una condicion if el ? hace la senetencia true, y el else es el :
    $name = isset($_POST['name']) ? mysqli_real_escape_string ($db, $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($db, $_POST['lastname']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string ($db, trim($_POST['email'])) : false;
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

    //Validacion email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate= true;
    }else{
        $errores ['email'] = 'Email error';
        $email_validate = false;
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

        //Insertamos usuario si no existe errores, en la tabla Usuarios
        $sql = "INSERT INTO usuarios VALUES( NULL, '$name', '$lastname', '$email', '$security_pass', CURDATE());";
        $save = mysqli_query($db, $sql);

        if($save){
            $_SESSION['finished'] = "User created!";
        } else{
            $_SESSION['errores']['general'] = "Error to save the user";
        }

    }else{
        //Si existen errores en el registo de usuarios...
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');







?>