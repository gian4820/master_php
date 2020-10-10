<?php

//Conectar a la DB
$conexion = mysqli_connect("localhost", "root", "", "phpmysql", 3307);

//Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo "La conexion a la DB a fallado" . mysqli_connect_error();  
}else{
    echo 'Conexion Ok a la DB';
}

//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8");

//********Consulta SELECT desde PHP**********
$consulta = mysqli_query($conexion, "SELECT * FROM notas");

//mostramos titulo y descripcion de la tabla notas
while ($nota = mysqli_fetch_assoc($consulta)){
    echo '<h2>'. $nota ['titulo'].'</h2>';
    echo $nota['descripcion'];
}


//***********INSERT EN DB DESDE PHP***************
$sql = "INSERT INTO notas VALUE(null, 'Nota desde PHP', 'Esto es una nota desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo '<hr>';
if($insert){
    echo "Datos insertados correctamente";
}else{
    echo "Error: ". mysqli_error($conexion);
}

