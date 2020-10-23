<!-- Guardamos el post y hacemos validaciones-->
<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    $title = isset($_POST['title']) ? mysqli_real_escape_string($db, $_POST['title']) : false;
    $description = isset($_POST['description']) ? mysqli_real_escape_string($db, $_POST['description']) : false;
    $category = isset($_POST['category']) ? (int) $_POST['category'] : false;
    $user = $_SESSION['user']['id'];


    //validaciones
    $errors = array();

    if(empty($title)){
        $errors['title'] = 'The title is empty';
    }


    if(empty($description)){
        $errors['description'] = 'The description is empty';
    }

    if(empty($category) && !is_numeric($category)){
        $errors['category'] = 'The category is empty';
    }

    if(count($errors) == 0){
        if(!isset ($_GET['edit'])){
            $sql = "INSERT INTO entradas VALUE (NULL, $user, $category, '$title', '$description', CURDATE());";
        }else{
            $post_id = $_GET['edit'];
            $user_id = $_SESSION['user']['id'];
            $sql = "UPDATE entradas SET titulo='$title', descripcion='$description', categoria_id=$category " . 
                   "WHERE id =$post_id AND usuario_id =$user_id;";
        }
        $save = mysqli_query($db, $sql);
        header("Location: index.php");
        
    }else{
        $_SESSION["errors_input"] = $errors;
        if(!isset($_GET['edit'])){
            header("Location: create-post.php");
        }else{
            header("Location: edit-post.php?id=".$_GET['edit']);
        }
    }
}

