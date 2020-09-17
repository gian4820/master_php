<?php

//Abrir un fichero
$archivo = fopen("ficheros_texto.txt", "a+");

//Aqui lo recorremos al archivo, para que me muestre todos los saltos de linea del archivo
//la funcion feof lo abre, y fgets, lo recorre
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido . '<br>';
}

//Aqui escribimos el archivo con el siguiente comando
fwrite($archivo, "<br> Hola a todos!!");


//cerramos el arhivo
fclose($archivo);

//copiar archivo
copy('ficheros_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');


//renombrar fichero
rename('fichero_copiado.txt', 'nuevo_nombre.txt');

//eliminar archivo
unlink('nuevo_nombre.txt') or die('Error al eliminar');

//comprobar si un archivo existe o no
if(file_exists('ficheros_texto.txt')){
    echo 'El archivo SI existe';
}else{
    echo 'el archivo NO existe';
}

