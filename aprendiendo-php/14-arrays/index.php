<?php

$autos = ['BMW', 'Audi', 'Mercedes', 'Honda'];

var_dump($autos);
echo 'El Auto en la posicion 2 es: ' . $autos[1];

echo '<br>';
echo 'El tamaño del array es de: '.count($autos);

echo '<br>';
echo '<h2>Recorrido del array con for </h2>';

for ($i=0; $i< count($autos); $i++){
    echo '<li>' . $autos[$i] . '</li>';
};

//for each

echo '<h2> Recorrido con foreach:</h2>';

foreach ($autos as $auto) {
    echo '<li>'. $auto .'</li>';
};


//array asociativo
echo '<h2>Muestra elemento de array asociativo:</h2>';
$personas = array(
    'nombre' => 'Gianfranco',
    'apellido' => 'Groppo',
    'edad' => '32'
);

echo $personas['apellido'];


//array multidimensionales
echo '<h2>Mostrar array multidimensionales</h2>';

$contactos = array(
    array(
        'nombre' => 'Pedro',
        'edad' => '33'
    ),
    array(
        'nombre' => 'Alfonso',
        'edad' => '35'
    ),
    array(
        'nombre' => 'Maria',
        'edad' => '38'
    ),
);

echo $contactos[1]['edad'] . '<br>';

foreach ($contactos as $key => $contacto) {
    echo '<li>'. $contacto['nombre'] . ' '. $contacto['edad'] .'</li>';
}

?>