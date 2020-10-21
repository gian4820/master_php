<?php
include_once 'includes/redirection.php';
include_once 'includes/header.php';
include_once 'includes/sidebar.php';
?>


<!--Formulario de Categorias -->

<div id="principal">
    <h1>Create category</h1>
    <br>
    <p>Create new categories for the blog, so users can use it.</p>
    <br>

    <form action="save-categories.php" method="POST">
        <label for="name">Category:</label>
        <input type="text" name="name">

        <input type="submit" value="Create">
    </form>

</div>

<?php
    include_once 'includes/footer.php';
?>