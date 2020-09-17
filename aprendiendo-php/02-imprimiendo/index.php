<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimiendo y concatenacion</title>
</head>
<body>
    <?php
    echo "<h2>Este es un listado de peleadores: </h2>";
    echo "<ul>"
            . "<li>Conor</li>"
            . "<li>Marlon Moraes</li>"
            . "<li>Shogun Rua</li>"
        ." </ul>";

    echo "Esos son algunos de los " . "Peleadores" . " =) <br>";



    ?>

    <!--Lo que sigue es igual que un echo, y ademas podemos agregar las etiquetas de php que quisieramos.-->
    <?="Esto es lo mismo que un echo, pero abriendo una nueva etiqueta de php"?>

</body>
</html>