<!-- CREATE POST PAGE-->

<?php
include_once 'includes/redirection.php';
include_once 'includes/header.php';
include_once 'includes/sidebar.php';

?>

<div id="principal">
    <h1>Create new post</h1>
    <br>
    <p>Add new post to the blog. So other people can enjoy this web.</p>
    <br>

    <form action="save-post.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <?php echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'title') : '' ;?>

        <label for="description">Description:</label>
        <textarea name="description" cols="100" rows="10"></textarea> 
        <?php echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'description') : '' ;?>


        <label for="category">Category:</label>
        <select name="category">
            <?php 
                $categories = listCategories($db);
                if(!empty($categories)){
                    //el fetch_assoc crea un array asociativo de $categories
                    while($category = mysqli_fetch_assoc($categories)){
            ?>
                        <option value=" <?= $category['id'] ?>">
                            <?= $category['nombre'] ;
                            ?>
                        </option>
            <?php        
                    echo isset($_SESSION['errors_input']) ? showErrors($_SESSION['errors_input'], 'category') : '';
                    }
                }
            ?>      
        </select>

        <input type="submit" value="Create">
    </form>
    <?php deleteErrors(); ?>
</div>


<!-- FOOTER -->

<?php require_once 'includes/footer.php'; ?>