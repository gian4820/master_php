<!--PAGINA DEL POST SELECCIONADO -->

<?php 
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

//traemos la funcion del helper
$select_post = selectPost($db, $_GET['id']);

//averiguamos si existe el id, sino te redirige al index
if(!isset($select_post['id'])){
    header("Location: index.php");
}

//Incluimos el Header-->
 require_once 'includes/header.php' ;
//Incluimos el sidebar-->
 require_once 'includes/sidebar.php' ?>

<!--CONTENIDO-->
<div id=principal>
    <!--TITULO-->
    <h1><?= $select_post['titulo'] ?></h1>
    <!--CATEGORIA -->
    <a href="categories.php?id=<?= $select_post['categoria_id']?>">
        <h4 style="color: orange;"><?= $select_post['categoria'] ?></h4>
    </a>
    <br>
    <!--DESCRIPCION-->
    <p>
        <?= $select_post['descripcion'] ?>
    </p>
    <br>
    <!--USUARIO-->
    <h5 style="color:crimson"><?= $select_post['usuario'] ?></h5>
    <!--FECHA-->
    <h5 style="color:green"><?= $select_post['fecha'] ?></h5>

    <!--SI EL USUARIO ES DUENO DEL POST, ENTONCES MUESTRA LOS BOTONES EDIT Y DELETE -->
    <?php
    if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $select_post['usuario_id']){
    ?>
        <a href="edit-post.php" class="boton">Edit</a>
        <a href="delete-post.php" class="boton-rojo">Delete</a>
    <?php
    }
    ?>
    


<!--Incluimos el footer-->
<?php include_once 'includes/footer.php'?>
