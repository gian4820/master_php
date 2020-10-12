<?php

//Iniciar la sesion y la conexion a la db
require_once 'includes/conexion.php';

if (isset($_POST)) {

    //Borramos error de login antiguo
    if (isset($_SESSION['error_login'])) {
        session_unset($_SESSION['error_login']);
    }

    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $user = mysqli_fetch_assoc($login);

        //Comprobar la contraseña
        $verify = password_verify($password, $user['password']);



        if ($verify) {
            //Utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['user'] = $user;
        } else {
            // Si algo falla, enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login Incorrect";
        }
    } else {
        $_SESSION['error_login'] = "Login Incorrect";
    }

    // Redirigir al index.php
    header('Location: index.php');
}
