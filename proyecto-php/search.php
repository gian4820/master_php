<?php 

if(!isset($_POST['search'])){
    header("Location: index.php");
}

//Incluimos el Header-->
 require_once 'includes/header.php' ;
//Incluimos el sidebar-->
 require_once 'includes/sidebar.php' ?>

    <!--CONTENIDO-->
    <div id=principal>
        <h1>Search: <?= $_POST['search'] ?></h1>

        <!--Traemos todas las entradas de la DB -->
        <?php
            $inp = lastInputs($db, null, null, $_POST['search']);

            if(!empty($inp) && mysqli_num_rows($inp)>= 1){
                while($in = mysqli_fetch_assoc($inp)){
        ?>   

            <article class="entrada">
                <a href="post.php?id=<?=$in['id']?>">
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
            }else{
            ?>
                <br>
                <br>
                <div class="alerta" style="color: slategray; font-size: 15px;">No posts yet for this category... Add new one!</div>
            
            <?php
            }
        ?>

        <!--Boton ver toda las entradas -->
    </div>

<!--Incluimos el footer-->
<?php include_once 'includes/footer.php'?>
