<?php

// Autoload.php = Invoca y ejecuta todas las dependencias.

// Paso 1: 
require_once '../../vendor/autoload.php';

// Paso 2: (namespace)
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\ExceptionFormatter;

// Paso 3: Manejador de excepciones
try{

  // Paso 4: iniciar un objeto
  ob_start();

  // Configurar estilos
  $data = "
    <style>
      *{margin: 0}
      h1{color: blue}
      h2{color: red}
    </style>
  ";

  // Paso 5: Contenido a exportar
  $data .= "<h1>Brick Clinton Cueva Canchari</h1>";
  $data .= "<h2>ingenieria de Software con I.A</h2>";

  // Paso 6: Refinando el contenido
  $data .= ob_get_clean();

  // Paso 7. construir el objeto PDF
  // Portrait = vertical
  $html2pdf = new Html2Pdf('P', 'A4', 'fr');
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($data);
  $html2pdf->output('SENATI.pdf');

} catch (Html2PdfException $error){
  // manejador de excepciones
  $html2pdf->clean();                          // Se liberan recursos
  $formatter = new ExceptionFormatter($error); // Formatear = presentar
  echo $formatter->getHtmlMessage();           // Mostrar el error
}

?>