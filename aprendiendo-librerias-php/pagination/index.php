<?php

require_once '../vendor/autoload.php';

//conexion db
$conexion = new mysqli("localhost", "gian", "123", "notas_master", 3307);
$conexion->query("SET NAMES 'utf-8'");

//consulta a paginar
$consulta = $conexion->query("SELECT * FROM NOTAS");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

//hacemos paginacion
$pagination = new Zebra_Pagination();

//Numero total de elementos a paginar
$pagination->records($numero_elementos);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

//Tomamos cual es la pagina
$page = $pagination->get_page();

//variable para comenzar la paginacion
$start = (($page-1)*$numero_elementos_pagina);

//Sacamos el numero de paginas -1 y nos cuenta los elementos 
$sql = "SELECT * FROM notas LIMIT $start,$numero_elementos_pagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3>";
}


$pagination->render();

