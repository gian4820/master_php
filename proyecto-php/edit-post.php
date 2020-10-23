<!-- EDIT POST PAGE-->

<?php
include_once 'includes/redirection.php';
include_once 'includes/conexion.php';
include_once 'includes/helpers.php';

//traemos la funcion del helper
$select_post = selectPost($db, $_GET['id']);

//averiguamos si existe el id, sino te redirige al index
if(!isset($select_post['id'])){
    header("Location: index.php");
}

include_once 'includes/header.php';
include_once 'includes/sidebar.php';

?>

<div id="principal">
    <h1>Edit: <?=$select_post['titulo']?></h1>
    <br>
    <p>Edit the post of the blog.</p>
    <br>

    <form action="save-post.php?edit=<?=$select_post['id']?>" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?=$select_post['titulo']?>">
        <?php echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'title') : '' ;?>

        <label for="description">Description:</label>
        <textarea name="description" cols="100" rows="10"><?=$select_post['descripcion']?></textarea> 
        <?php echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'description') : '' ;?>


        <label for="category">Category:</label>
        <select name="category">
            <?php 
                $categories = listCategories($db);
                if(!empty($categories)){
                    //el fetch_assoc crea un array asociativo de $categories
                    while($category = mysqli_fetch_assoc($categories)){
            ?>
                        <option value=" <?= $category['id'] ?>"
                        <?php if($category['id'] == $select_post['categoria_id']){
                                echo 'selected="selected"';
                              }else{
                                echo "";
                              }
                        ?>
                        >
                            <?= $category['nombre'] ;
                            ?>
                        </option>
            <?php        
                    echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'category') : '';
                    }
                }
            ?>      
        </select>

        <input type="submit" value="Edit post">
    </form>
    <?php deleteErrors(); ?>
</div>


<!-- FOOTER -->

<?php require_once 'includes/footer.php'; ?>