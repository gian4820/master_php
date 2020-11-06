<?php

class User{
    public $name;
    public $lastname;
    public $email;
    public $password;

    //Getters
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastnamename;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

    //Setters
    public function setName($name){
        $this-> name = $name;
    }
    public function setLastname($lastname){
        $this-> name = $lastname;
    }
    public function setEmail($email){
        $this-> name = $email;
    }
    public function setPassword($password){
        $this-> name = $password;
    }

    //Sacar usuarios
    public function listAll(){
        echo "Sacamos todos los usuarios";
    }
}