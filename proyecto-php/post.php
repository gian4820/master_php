<?php 
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$select_post = selectPost($db, $_GET['id']);


/*
if(!isset($select_post['id'])){
    header("Location: index.php");
}
*/

//Incluimos el Header-->
 require_once 'includes/header.php' ;
//Incluimos el sidebar-->
 require_once 'includes/sidebar.php' ?>

<!--CONTENIDO-->
<div id=principal>

    <h1><?= $select_post['titulo'] ?></h1>
    <h4 style="color: orange;"><?= $select_post['categoria'] ?></h4>
    <br>
    <p>
    <?= $select_post['descripcion'] ?>
    </p>
    <p style="color:crimson; font-size: 14px;"><?= $select_post['fecha'] ?></p>

    


<!--Incluimos el footer-->
<?php include_once 'includes/footer.php'?>
