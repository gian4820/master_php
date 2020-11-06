<?php

function autoload_class ($class){
    include 'class/' . $class . '.php';
}

spl_autoload_register('autoload_class');