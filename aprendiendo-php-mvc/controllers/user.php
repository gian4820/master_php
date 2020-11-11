<?php

class UserController{
    
    public function listAll(){
        require_once 'models/user.php';
        $user = new User();
        $all_users = $user ->selectAll();
        
        require_once 'views/users/show-all.php';
    }

    public function create(){
        require_once 'views/users/create.php';
    }

}