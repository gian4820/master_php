<h1>Wellcome to my web with MVC</h1>
<?php

require_once 'controllers/user.php';
$controller =  new UserController();



if(isset($_GET{'action'})){
    $action = $_GET['action'];
    $controller->$action();
}



