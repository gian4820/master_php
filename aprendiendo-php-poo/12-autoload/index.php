<?php
require_once 'autoload.php';
echo 'Aqui vamos a mostrar los atributos del objeto de las clases, con el autoload de clases';
echo '<br>';

$user =  new User();
echo $user->name;
echo '<br>';
echo $user->email;

echo "<br>";
echo "Comprobamos si existe una clase con el metodo class_exist";
echo '<br>';
//comprobar si existe una clase
$existe = @class_exists('Usaer');
if($existe){
    echo "The class exist";
}else{
    echo "The class doesnt exist";
}

//metodos con informacion
function information(){
    echo "<br>Metodo __DIR__ <br>";
    echo __DIR__;

    echo "<br>Metodo __METHOD__ <br>";
    echo __METHOD__;

    echo "<br>Metodo __LINE__ <br>";
    echo __LINE__;

    echo "<br>Metodo __FUNCTION__ <br>";
    echo __FUNCTION__;
}

//Lo ejecutamos;
information();