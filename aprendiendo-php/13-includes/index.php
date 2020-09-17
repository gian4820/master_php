<?php
include 'includes/header.php';
?>


<div>
    <p>En este ejemplo, vemos como crear los ficheros footer y header, en include, para que
        no lo repitamos en todas las paginas. 
    </p>
    <p>
        Podemos utilizar:
        <ul>
            <li>include: Incluye cuantas cabeceras querramos, las podemos repetir</li>
            <li>include_once: Incluye una sola cabecera, por las que las repitamos</li>
            <li>require: Es lo mismo que el include, pero la diferencia, es que si existe un error
                en el codigo, este no lo va mostrar, en cambio el include, lo mostrará igual, solo que un poco mas desordenado.
            </li>
        </ul>
    </p>
</div>










<?php
include 'includes/footer.php';
?>




