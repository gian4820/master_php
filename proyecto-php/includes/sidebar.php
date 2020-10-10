<!--SIDEBAR-->

<?php include_once 'includes/helpers.php'?>

<div id=container>
<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Login</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" value="Login">
        </form>
    </div>

    <!--Register-->
    <div id="register" class="block-aside">
        <h3>Register</h3>

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


        <form action="register.php" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name">
            <!-- Aqui mostramos la funcion showErrors, y nos muestra el mensaje si lo hubiera -->
            <?php echo isset($_SESSION['errores']) ? showErrors($_SESSION['errores'], 'name') : '' ; ?>

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname">
            <?php echo isset($_SESSION['errores']) ? showErrors($_SESSION['errores'], 'lastanme') : '' ; ?>


            <label for="email">Email</label>
            <input type="email" name="email">
            <?php echo isset($_SESSION['errores']) ? showErrors($_SESSION['errores'], 'email') : '' ; ?>


            <label for="password">Password</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errores']) ? showErrors($_SESSION['errores'], 'password') : '' ; ?>


            <input type="submit" name="submit" value="Register">
        </form>
        <?php deleteErrors(); ?>
    </div>
</aside>