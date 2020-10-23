<?php

include_once 'includes/conexion.php';

if(isset($_SESSION['user']) && isset($_GET['id'])){
    $inp_id = $_GET['id'];
    $user_id = $_SESSION['user']['id'];

    $sql = "DELETE FROM entradas WHERE usuario_id=$user_id AND id=$inp_id";
    $delete = mysqli_query($db, $sql);

    
}
var_dump($delete);
header("Location: index.php");