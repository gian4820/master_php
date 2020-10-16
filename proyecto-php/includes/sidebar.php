<!--SIDEBAR-->


<div id=container>
<aside id="sidebar">

    <!-- Mostramos el nombre del usuario loggeado-->
    <?php if(isset($_SESSION['user'])){ ?>
        <div id="user_loggedin" class="block-aside"> 
            <h3> Bienvenido, <?= $_SESSION['user']['nombre'] . ' ' . $_SESSION['user']['apellido']; ?> </h3>

            <!-- Botones-->
            <a href="create-post.php" class="boton-verde">New Post</a>
            <a href="create-categories.php" class="boton-naranja">Create Category</a>
            <a href="account.php" class="boton-rojo">Account</a>
            <a href="logout.php" class="boton">Logout</a>
            
        </div>
    <?php } ?>    

    <?php if(!isset($_SESSION['user'])){ ?>

        <div id="login" class="block-aside">
            <h3>Login</h3>

            <!-- Mostramos Error si no ingresa correctamente-->
            <?php if(isset($_SESSION['error_login'])){ ?>
                    <div class="alerta alerta-error"> 
                        <?= $_SESSION['error_login']; ?>
                    </div>
            <?php } ?>    

            <!-- Formulario Login-->    

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
    <?php }  ?>
</aside>