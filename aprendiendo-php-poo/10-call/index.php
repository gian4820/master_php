<?php

class Person{
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    //Este metodo magico hace que si no existe el metodo, que devuelva lo siguiente
    public function __call($name, $arguments){
        $prefix_method = substr($name, 0,3);

        if($prefix_method == 'get'){
            $method_name = substr(strtolower($name), 3);

            if(!isset($this->$method_name)){
                return "The method doesnt exist";
            }

            return $this->$method_name;
        }else{
            return "The method doesnt exist";
        }
    }
}

$person = new Person("Jose", 21, "Alvarez");
echo $person ->getName() ."<br>";
echo $person ->getAge() ."<br>";
echo $person ->getGender() ."<br>";
//corroboramos el error.
echo $person ->getAnyway() ."<br>";