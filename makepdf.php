<?php

require_once __DIR__ . '../vendor/autoload.php';

require_once('documento.php');
//Grabs variables
$plantilla = getPlantilla();
$css = file_get_contents('style-imprimir.css');


$mpdf = new \Mpdf\Mpdf();
$mpdf->SetFooter('{PAGENO}',$side ='right');

$mpdf->WriteHTML($plantilla);

//output browser
$mpdf->Output('myfile.pdf','D' );