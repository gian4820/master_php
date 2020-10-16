<?php
include_once 'includes/redirection.php';
include_once 'includes/header.php';
include_once 'includes/sidebar.php';
?>

<div id="principal">
    <h1>Account</h1>
    <br>
    <p>Update your data.</p>
    <br>

    <!-- Show errors-->
    <?php 
        if(isset($_SESSION['finished'])){ 
    ?>
    <div class="alerta alerta-exito">
        <?= $_SESSION['finished'] ?>
    </div>

    <?php
        }elseif(isset($_SESSION['errores']['general'])){ 
    ?>
    <div class="alerta alerta-error">
        <?= $_SESSION['errores']['general'] ?>
    </div>

    <?php }; ?>

    <!--FORMULARIO ACCOUNT -->

    <form action="update-user.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?= $_SESSION['user']['nombre']; ?>">
            <?php if(isset($_SESSION['errores'])){
                echo showErrors($_SESSION['errores'], 'name');
            } else{
                echo '';
            }?>

            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" value="<?= $_SESSION['user']['apellido']; ?>">
            <?php if(isset($_SESSION['errores'])){
                echo showErrors($_SESSION['errores'], 'lastname');
            } else{
                echo '';
            }?>
    

            <label for="password">Password:</label>
            <input type="password" name="password">
            <?php if(isset($_SESSION['errores'])){
                echo showErrors($_SESSION['errores'], 'password');
            } else{
                echo '';
            }?>


            <input type="submit" value="Update">
    </form>
    <?php deleteErrors(); ?>



</div>