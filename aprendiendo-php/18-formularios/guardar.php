<?php

if(isset($_POST['apellido']) && isset($_POST['descripcion'])){
    echo '<h1>'. $_POST['apellido'] .'</h1>';
    echo '<h2>'. $_POST['descripcion'] .'</h2>';
}