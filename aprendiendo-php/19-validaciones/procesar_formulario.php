<?php
$error = 'faltan_valores';

if (
    !empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    !empty($_POST['edad']) &&
    !empty($_POST['email']) &&
    !empty($_POST['password'])
) {

    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Una vez que comprueba que no esta vacio, comprobar que sean caracteres correctos de cada campo

    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
        $error = 'nombre';
    }
    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)) {
        $error = 'apellido';
    }
    if (!is_numeric($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    if (empty($password) || strlen($password) < 5) {
        $error = 'password';
    }

} else {
    $error = 'faltan_valores';
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>

<!-- HTML MUESTRA DATOS INGRESADOR POR EL FORM  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validacion de formulario PHP</title>
    </head>

    <body>
        <?php
        if ($error == 'ok') :  ?>
            <h1>Datos validados correctamente</h1>
            <p> <?= $nombre ?> </p>
            <p> <?= $apellido ?> </p>
            <p> <?= $edad ?> </p>
            <p> <?= $email ?> </p>
        <?php endif; ?>
    </body>
</html>