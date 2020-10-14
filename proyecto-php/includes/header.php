<!-- Conexion DB -->
<?php require_once 'conexion.php' ?>
<?php include_once 'includes/helpers.php'?>

<!-- HTML Header -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de video juegos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!--CABECERA-->
    <header id="header">
        <div id="logo">
            <a href="index.php">Blog de Video Juegos</a>
        </div>

        <!--MENU-->

        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                
                <!-- Traemos las categorias de la DB y la mostramos en el NAV-->
                <?php 
                    $categories = listCategories($db); 
                        if(!empty($categories)){
                            while($categoria = mysqli_fetch_assoc($categories)){
                ?>
                                <li>
                                    <a href="categories.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                                </li>
               <?php 
                            } 
                        }        
               ?>
                
                
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>