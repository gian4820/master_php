<?php
//METODOS MAGICOS, SON LOS QUE EMPIEZAN CON __

class User {
    public $name= 'Pedro';
    public $lastname = 'Rodriguez';
    
    //creamos el constructor
    public function __construct(){
        echo "Creating constructor <br>";
    }

    //Metodo magico to string. Ya que si quiero imprimir $name, no me va dejar porque es un objeto
    public function __toString(){
        return "Hola  {$this->name} {$this->lastname} , estoy convirtiendo el obj a string.";
    }

    public function __destruct(){
        echo "<br> Destroing constructor";
    }
}

$username = new User();
for ($i=0; $i<=20; $i++){
    echo $i . '<br>';
}


echo $username;