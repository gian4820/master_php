<?php

//Herencia

class Person{
    public $name;
    public $surname;
    public $age;
    public $height;

    //GETTERS
    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getAge(){
        return $this->age;
    }

    public function getHight(){
        return $this->hight;
    }

    //SETTERS
    public function setName($name){
        $this->name=$name;
    }

    public function setSurname($surname){
        $this->surname=$surname;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function setHeight($height){
        $this->height=$height;
    }


    //ACCIONES

    public function hablar(){
        return "Estoy hablando";
    }

    public function correr(){
        return "Estoy corriendo";
    }

}

class Informatic extends Person{
    
    public $leng;

    
    public function lenguajes($leng){
        $this->leng=$leng;
        return $this->leng;
    }

    public function programador(){
        return 'Soy programador';
    }

} 