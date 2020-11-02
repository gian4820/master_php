<?php
//SOBRECARGA DE METODOS  = TRAIT

trait Sobrecarga{
    public function showNames(){
        echo "<h2>The name is " . $this-> name . "</h2>";
    }
}

class Car{
    public $name;
    public $model;

    use Sobrecarga;
}

class Person{
    public $name;
    public $age;

    use Sobrecarga;
}

class Computer{
    public $name;
    public $sn;

    use Sobrecarga;
}

$ferrari = new Car();
$ferrari ->name = 'Ferrari';
$ferrari ->showNames();

$pedro = new Person();
$pedro ->name = 'Pedro';
$pedro ->showNames();

$dell = new Computer();
$dell ->name= 'Dell';
$dell ->showNames();
