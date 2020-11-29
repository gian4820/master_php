<?php

require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$html = "<h1>Hola a todos esto es un html transformado en un pdf</h1>";

//recogemos la vista a imprimir
//ob_start();
//require_once 'web.php';
//$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generated.pdf');

?>