<!--Incluimos el Header-->

<?php require_once 'includes/header.php' ?>


    <!-- Incluimos el sidebar-->
    <?php require_once 'includes/sidebar.php' ?>

    <!--CONTENIDO-->
    <div id=principal>
        <h1>Ultimas entradas</h1>

        <!--Traemos las ultimas 4 entradas de la DB -->
        <?php
            $inp = lastInputs($db);

            if(!empty($inp)){
                while($in = mysqli_fetch_assoc($inp)){
            ?>   

            <article class="entrada">
                <a href="">
                    <h2>
                        <?= $in['titulo']?> 
                    </h2>
                    <span class="fecha">
                        <?= $in['categoria'] . ' | ' . $in['fecha']; ?>
                    </span>
                    <p>
                        <!--Con el Substr le decimos que nos corte el texto hasta los 200 caracteres-->
                        <?= substr($in ['descripcion'], 0, 200 )    ?>
                    </p>
                </a>
            </article>

            <?php
                }
            }
        ?>

        <!--Boton ver toda las entradas -->

        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
    </div>



<!--Incluimos el footer-->
<?php include_once 'includes/footer.php'?>
