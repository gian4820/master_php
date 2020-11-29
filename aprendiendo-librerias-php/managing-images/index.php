<?php

require_once '../vendor/autoload.php';

$original = 'koala.jpg';
$mod = 'koala_mod.jpg';

$thumb = new PHPThumb\GD($original);

//Redimensionar
$thumb->resize(200, 200);

//Recortar
$thumb->cropFromCenter(50,50);

$thumb->show();
$thumb->save($mod);