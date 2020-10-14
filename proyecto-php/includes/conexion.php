<?php

//conexion
$server = 'localhost';
$username = 'gian';
$password = '123';
$database = 'blog';

$db = mysqli_connect($server, $username, $password, $database, 3307);

mysqli_query($db, "SET NAMES 'utf-8'");

//Iniciamos la sesion, si no esta, la iniciamos. 
if(!isset($_SESSION)){
    session_start();
}
