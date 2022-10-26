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

  // Incorporar el modelo (Reporte => controlador + vista)
  require_once '../../models/Alumno.php';
  $alumno = new Alumno();
  $result = $alumno->listarAlumnos();

  // Configurar estilos
  $data = "
    <style>
      *{margin: 0}
      h1, p {color: darkBlue; text-align: center}
      table {
        border-collapse: collapse;
        margin-top: 1em;
        width: 100%;
      }
      .border-tabla td, th{
        padding: 6px 8px;
        border: 1px solid #000;
      }
      .img-titulo{
        width: 80px;
      }
      .img-center{
        width: 80%;
        height: 450px;
        objet-fit: cover;
        objet-center: center center;
        margin: 20px;
        margin-top: 1em;
      }
   
    </style>
  ";

  // Paso 5: Contenido a exportar
  // Titulo
  //$data .= "<h1>Lista de alumnos</h1>";
  //$data .= "<p>Ingenieria de Software con Inteligencia Artificial</p>";

  // Actualizando el titulo
  $data .= "
      <table>
        <colgroup>
          <col style='width: 15%; text-align: center;'>
          <col style='width: 70%'>
          <col style='width: 15%'>
        </colgroup>
        <tbody>
          <tr>
            <td><img class='img-titulo' src='../images/big-data-istock-1-1024x576.jpg'></td>
            <td>
              <h1>Lista de alumnos</h1>
              <p>Ingenieria de Software con Inteligencia Artificial</p>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
  ";

  // Tabla - cabecera
  $data .= "
    <table class='border-tabla'>
    <colgroup>
      <col style='width: 10%'>
      <col style='width: 35%'>
      <col style='width: 35%'>
      <col style='width: 20%'>
    </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>Apellidos</th>
        <th>Nombres</th>
        <th>Telefono</th>
      </tr>
    </thead>    
  ";

  // Tabla - contenido
  $data .= "<tbody>";

  // Renderinzar los datos obtenidos por el método
  foreach($result as $row){
    $data .= "
      <tr>
        <td>{$row['idalumno']}</td>
        <td>{$row['apellidos']}</td>
        <td>{$row['nombres']}</td>
        <td>{$row['telefono']}</td>
      </tr>
    ";
  }

  // Tabla - cierre
  $data .= "</tbody>";
  $data .= "</table>";

  $data .= "<img class='img-center' src='../images/big-data-istock-1-1024x576.jpg'>";

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