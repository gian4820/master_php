<?php
require_once 'models/usuario.php';

class usuarioController{
    public function index(){
        echo "Controlador usuarios, accion index";
    }

    public function register(){
        require_once 'views/user/register.php';
    }

    public function save(){
        if(isset($_POST)){
            
        }
    }
}