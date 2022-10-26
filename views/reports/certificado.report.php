<?php

// Obteniendo enlace al archivo
require_once '../../vendor/autoload.php';

// Espacio de trabajo (namespace)

use Spipu\Html2Pdf\Exception\ExceptionFormatter as ExceptionExceptionFormatter;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\ExceptionFormatter;

// manejador de excepciones
try{
  // Iniciar objeto
  ob_start();

  // Configurar estilos
  $data = "
    <style>
      *{
        margin: 0; 
        padding: 0;        
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        line-height: 18px;
       }

       h2{font-size: 20px;}
       h3{ font-size: 18px;}
       strong{font-weight: bold;}
       
      .title{
        text-align: center;
        font-size: 18px !important;
      }        
      .container{
        margin: 10px 25px;
      }

      .subtitle{
        font-weight: bold;
        margin-bottom: 3px;
      }

      .bold{
        font-weight: bold !important;
      }
      .d-block{
        width: 100% !important;
        display: block !important;
      }
      .mt-1{
          margin-top: 1em;
      }
      .mb-1{ margin-bottom: 1em;}

      .left{ float: left !important;}
      .right{ float: right !important;}
      .center{ display: inline-block !important;}
      .text-left{text-align: left !important;}
      .text-right{text-align: right !important;}
      .text-center{text-align: center !important;}

      h1{color: darkBlue; text-align: center}
      table {
        border-collapse: collapse;
        width: 100%;
      }
      .border-tabla td, th{
        padding: 4px 5px;
        border: 1px solid #000;
        height: 1em;
        text-align: left;
      }

      .img-logo{
        width: auto;
        height: 85px;
        object-fit: contain;
        object-position: center center;
      }
      .img-min-salud{
        width: 90%;
        height: 48px;
        object-fit: contain;
        object-position: center center;
        margin-bottom: 0;
        margin-top: 1em;
      }
      .img-firma{
        position: relative;
        height: 105px;
        width: 100%;
      }
    </style>
  ";

  // Contenido a exportar
  $data .= "
    <div class='container'>
        <!-- Cabecera -->
        <table>
            <colgroup>
                <col style='width: 45%; text-align: left;'>
                <col style='width: 8%; text-align: right;'>
                <col style='width: 22%; text-align: right;'>
                <col style='width: 25%; text-align: right;'>
            </colgroup>
            <tbody >
                <tr>
                    <td rowspan='2'><img class='img-logo' src='../images/logo_famisalud_flat.png'></td>

                    <td colspan='3'>
                        <img class='img-min-salud' src='../images/salud_ambiental.png'>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <table class='border-tabla mt-1'>
                            <colgroup>
                                <col style='width: 50%;'>
                                <col style='width: 50%;'>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td class='bold'>CÓDIGO</td>
                                    <td>01222</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Titulo -->
        <h4 class='title mt-1 mb-1'>Certificado de Aptitud Médico Ocupacional</h4>
        
        <!-- Parte 1 -->
        <h4 class='subtitle'>CERTIFICA que el Sr.(a):</h4>
        <table class='border-tabla'>
            <tbody>
                <tr>
                    <td colspan='4' style='width: 30%;' class='subtitle'>Nombre y Apellidos:</td>
                    <td colspan='7' style='width: 50%;'></td>
                    <td class='subtitle' style='width: 10%'>H.C</td>
                    <td style='width: 10%'>011</td>
                </tr>
                <tr>
                    <td class='subtitle'>DNI:</td>
                    <td>x</td>
                    <td class='subtitle'>PASAPORTE:</td>
                    <td></td>
                    <td colspan='2' class='subtitle'>Carnet de Extranjería:</td>
                    <td></td>
                    <td class='subtitle'>N°</td>
                    <td>55228569</td>
                    <td class='subtitle'>EDAD:</td>
                    <td>22</td>
                    <td class='subtitle'>Genero:</td>
                    <td>M</td>
                </tr>
                <tr>
                    <td colspan='5'  class='subtitle'>Empresa:</td>
                    <td colspan='8'></td>
                </tr>
                <tr>
                    <td colspan='5' class='subtitle'>Puesto al que consulta (solo ocupacional);</td>
                    <td colspan='8'></td>
                </tr>
                <tr>
                    <td colspan='5' class='subtitle'>Ocupación actual o ultima ocupación:</td>
                    <td colspan='8'></td>
                </tr>
                <tr>
                    <td colspan='5' class='subtitle'>RAM</td>
                    <td colspan='8'></td>
                </tr>
            </tbody>
        </table>

        <!-- Parte 2 -->
        <table class='border-tabla mt-1'>
            <colgroup>
                <col style='width: 100%;'>
            </colgroup>
            <thead>
                <tr>
                    <th style='text-align: left;'>Conclusiones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style='height: 50px;'></td>
                </tr>
            </tbody>
        </table>

        <!-- Parte 3 -->
        <table class='border-tabla mt-1'>
            <colgroup>
                <col style='width: 35%;'>
                <col style='width: 10%;'>
                <col style='width: 55%;'>
            </colgroup>
            <tbody>
                <tr>
                    <td>
                        <strong>APTO</strong>
                        <p>
                           Lorem ipsum
                        </p>
                    </td>
                    <td><h3 class='title'>x</h3></td>
                    <td style='text-align: center; display: block;'>
                        <strong>Restricciones</strong>
                    </td>
                </tr>
                <tr>
                    <td>                        
                        <strong class='d-block'>APTO CON RESTRICCIÓN</strong>
                        <p>
                            Lorem ipsum
                        </p>
                    </td>
                    <td><h3 class='title'></h3></td>
                    <td rowspan='4'></td>
                </tr>
                <tr>
                    <td>
                        <strong class='d-block'>NO APTO</strong>
                        <p>
                            Lorem ipsum
                        </p>
                    </td>
                    <td><h3 class='title'></h3></td>
                </tr>
                <tr>
                    <td>
                        <strong>EVALUADO</strong>
                        <p>
                            Lorem ipsum
                        </p>
                    </td>
                    <td><h3 class='title'></h3></td>
                </tr>
                <tr>
                    <td>
                        <strong>NO APTO TEMPORAL</strong>
                        <p>
                            Lorem ipsum
                        </p>
                    </td>
                    <td><h3 class='title'></h3></td>
                </tr>
            </tbody>
        </table>

        <!-- Parte 4 -->
        <table class='border-tabla mt-1'>
            <colgroup>
                <col style='width: 100%'/>
            </colgroup>
            <thead>
                <tr>
                    <th>
                        Recomendaciones y/o Restricciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style='min-height: 85px; height: 90px'>
                        <p>
                            Lorem
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Fecha -->
        <div class='mt-1'>
            <span>Fecha:</span>
            <span>2022/05/25</span>
        </div>

        <!-- Firma -->
        <table style='margin-top: 1em;' >
            <colgroup>
                <col style='width: 30%;'>
                <col style='width: 35%;'>
                <col style='width: 30%;'>
                <col style='width: 5%;'>
            </colgroup>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td style='border-bottom: 1px solid black;'>
                        <img src='../images/firma.gif' class='img-firma'>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style='text-align: center; padding-top: 6px;'>
                        <p>Nombre, Sello y Firma</p>
                        <p>Médico que CERTIFICA</p>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Información -->
        <div style='bottom: 0; text-align: center; margin-top: 30px;'>
            <p >
            Calle 28 de Julio N° 397 Chincha Alta - Costado del Local Telefónica
            </p>
            <small>www.famisalud.com.pe</small>
        </div>
    </div>
  ";

  // Refinamiento
  $data .= ob_get_clean();

  // Construir el objeto PDF
  // Portrait: Vertical
  $html2pdf = new Html2Pdf('P', 'A4', 'fr');
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($data);
  $html2pdf->output('CERTIFICADO.pdf');

} catch(Html2PdfException $error){
  $html2pdf->clean();                               // Liberar recursos
  $formatter = new ExceptionFormatter($error);      // Formatear presentación
  echo $formatter->getHtmlMessage();                // Mostrar error

}
?>