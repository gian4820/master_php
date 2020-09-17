<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>

        <h1>Formulario</h1>

        <!-- MUESTRA ERROR EN PHP-->
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style = "color:red">Ingrese todos los campos</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style = "color:red">Ingrese nombre correcamente</strong>';
                }
                if($error == 'apellido'){
                    echo '<strong style = "color:red">Ingrese apellido correcamente</strong>';
                }
                if($error == 'edad'){
                    echo '<strong style = "color:red">Ingrese edad correcamente</strong>';
                }
                if($error == 'email'){
                    echo '<strong style = "color:red">Ingrese mail correctamente</strong>';
                }
                if($error == 'password'){
                    echo '<strong style = "color:red">Ingrese contraseña correctamente</strong>';
                }
            }
        ?>

        <!-- FORMULARIO HTML -->
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre: </label> <br>
            <input type="text" name="nombre" required="required" pattern="[A-Z a-z]+"> <br>

            <label for="apellido">Apellido: </label> <br>
            <input type="text" name="apellido" required="required" pattern="[A-Z a-z]+"> <br>

            <label for="edad">Edad: </label> <br>
            <input type="number" name="edad" required="required" pattern="[0-9]+"> <br>

            <label for="email">Email: </label> <br>
            <input type="email" name="email" required="required"> <br>

            <label for="password">Contraseña: </label> <br>
            <input type="password" name="password" required="required"> <br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>