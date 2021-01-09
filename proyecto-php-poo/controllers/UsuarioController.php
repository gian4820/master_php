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
            $usuario = new usuario();
            $usuario->setNombre($_POST['name']);
            $usuario->setApellido($_POST['lastname']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $save = $usuario->save();
            if($save){
                echo "Register completed!";
            }else{
                echo "Error register";
            }
        }
        else{
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url.'usuario/register');
        }
    
}