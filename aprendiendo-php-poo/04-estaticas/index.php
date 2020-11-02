<?php

require_once 'configuracion.php';

//Aqui accedemos a los metodos static, sin necesidad de crear un objeto.
ConfigStatic :: setColor("red");
ConfigStatic :: setNewsletter('redbrink.com');
ConfigStatic :: setEnvironment('desktop');

echo ConfigStatic :: $color;
echo '<br>';
echo ConfigStatic :: $newsleter;
echo '<br>';
echo ConfigStatic :: $environment;
echo '<br>';

$newConfig = new ConfigStatic();
$newConfig :: $color = 'Blue';
echo $newConfig::$color;

var_dump($newConfig);


