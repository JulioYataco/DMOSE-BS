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
        font-size: 9px;
        line-height: 15px;
       }

       h2{font-size: 20px;}
       h3{ font-size: 18px;}
       strong{font-weight: bold;}
       .text-bold{ font-weight: bold;}
       
      .title{
        text-align: center;
        font-size: 20px !important;
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
          margin-top: 5px;
      }
      .mb-1{ margin-bottom: 1em;}
      .mr-1{ margin-right: 1em;}
      .ml-1{ margin-left: 10px;}
      .ml-2{ margin-left: 20px;}

      .left{ float: left !important;}
      .right{ float: right !important;}
      .center{ display: inline-block !important;}
      .text-left{ text-align: left !important;}
      .text-right{ text-align: right !important;}
      .text-center{ text-align: center; }

      h1{color: darkBlue; text-align: center}
      table {
        border-collapse: collapse;
        width: 100%;
      }
      .no-border{
        border-collapse: collapse;
      }
      .border-tabla td, th{
        padding: 2px 3px 2px 5px;
        border: 1px solid #000;
        height: 1em;
      }

      .img-logo{
        width: auto;
        height: 65px;
        object-fit: cover;
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
        <table class='mb-1'>
            <colgroup>
                <col style='width: 40%; text-align: left;'>
                <col style='width: 60%; height: 15px; text-align: left;'>
            </colgroup>
            <tbody >
                <tr>
                    <td rowspan='3'><img class='img-logo' src='../images/logo_famisalud_flat.png'></td>

                    <td></td>
                </tr>
                <tr>
                    <td>
                        <!-- Titulo -->
                        <h4 class='title text-left'>INFORME MÉDICO</h4>
                    </td>
                </tr>
                <tr>
                    <td ></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Parte 1 -->
        <h5 class='subtitle mt-1'>1. DATOS PERSONALES</h5>
        <table class='border-tabla'>
            <tbody>
                <tr>
                    <td style='width: 25%;' class='subtitle'>APELLIDOS Y NOMBRES:</td>
                    <td style='width: 50%;'></td>
                    <td style='width: 15%' class='subtitle'>EDAD:</td>
                    <td style='width: 10%'>52</td>
                </tr>
                <tr>
                    <td class='subtitle'>EMPRESA:</td>
                    <td></td>
                    <td rowspan='2' class='subtitle'>
                        <p>FECHA DE</p>
                        <p>EVALUACIÓN:</p>
                    </td>
                    <td rowspan='2'></td>
                </tr>
                <tr>
                    <td class='subtitle'>OCUPACIÓN:</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Parte 2 -->
        <div>
            <strong class='text-bold mt-1 mr-1'>2. ANTECEDENTES PERSONALES:</strong> 
            <span class='ml-2'>NIEGA</span>
        </div>

        <!-- Parte 3 -->
        <div>
            <strong class='text-bold mt-1 mr-1'>3. REACCIÓN ALÉRGICA A MEDICAMENTOS:</strong> 
            <span class='ml-2'>NIEGA</span>
        </div>
                
        <!-- Parte 4 -->
        <div>
            <strong class='text-bold mt-1 mr-1'>4. EXAMEN CLÍNICO</strong>
        </div>
        <table class='border-tabla mt-1'>
            <colgroup>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
                <col style='width: 11.11%;'>
            </colgroup>
            <thead>
                <tr>
                    <th>TALLA (Mts)</th>
                    <th>Peso (kg)</th>
                    <th>P.Abdominal</th>
                    <th>IMC</th>
                    <th>Frecuencia cardiaca</th>
                    <th>Frecuencia respiratoria</th>
                    <th>Presión Arterial</th>
                    <th>Sat. 02</th>
                    <th>Temperatura</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.69</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Parte 5 -->
        <h5 class='subtitle mt-1'>5. EVALUACIÓN CLÍNICA REALIZADA</h5>
        
        <!-- Parte 6 -->
        <h5 class='subtitle mt-1'>6. EXÁMENES DE LABORATORIO Y COMPLEMENTARIOS</h5>
        <table class='border-tabla mt-1'>
            <colgroup>
                <col style='width: 20%'/>
                <col style='width: 15%'/>
                <col style='width: 25%'/>
                <col style='width: 15%'/>
                <col style='width: 25%'/>
            </colgroup>
            <thead>
                <tr>
                    <th>Exámenes de Laboratorio</th>
                    <th colspan='4' class='text-center'>Resultados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Grupo sanguineo y factor RH</td>
                    <td colspan='4'>O POSITIVO</td>
                </tr>
                <tr>
                    <td class='text-bold' rowspan='6'>Hemograma Completo</td>
                    <td>Hematocrito %</td>
                    <td></td>
                    <td>Eosinofilos %</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Hemoglobina gr/dl</td>
                    <td></td>
                    <td>Basofilos %</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Hematíes (mm3)</td>
                    <td></td>
                    <td>Monocitos %</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Leucocitos (mm3)</td>
                    <td></td>
                    <td>Linfocitos %</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Segmentados %</td>
                    <td></td>
                    <td rowspan='2'>Plaquetas</td>
                    <td rowspan='2'></td>
                </tr>
                <tr>
                    <td>Abastonados %</td>
                    <td></td>
                </tr>

                <tr>
                    <td rowspan='2'>Exámenes de Orina</td>
                    <td>LEUCOCITOS</td>
                    <td></td>
                    <td>HEMATIES</td>
                    <td></td>
                </tr>
                <tr>
                    <td>PH</td>
                    <td></td>
                    <td>COLOR</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Prueba de Embarazo</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>Glucosa</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>Triglicéridos</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>Colesterol</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>HbS-Ag Hepatitis B</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>TOXICOLOGICO</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>VIH</td>
                    <td colspan='4'></td>
                </tr>
                <tr>
                    <td>Exámenes Complementarios</td>
                    <td colspan='4' class='text-center text-bold'>
                       Resultados
                    </td>
                </tr>
                <tr>
                    <td>OSTEOMUSCULAR</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>OFTALMOLOGÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>AUDIOMETRÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>ESPIROMETRÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>CARDIOLOGÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>ODONTOLOGÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>RADIOLOGIA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>PSICOLOGÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>DERMATOLOGÍA</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>PSICOSENSOMÉTRICO</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
                <tr>
                    <td>TEST DE EPWORTH</td>
                    <td colspan='4' class='text-center'></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Parte 7 y 8 -->
        <table>
            <colgroup>
                <col style='width: 50%'/>
                <col style='width: 50%'/>
            </colgroup>
            <tbody>
                <tr>
                    <td>
                        <!-- Parte 7 -->
                        <h5 class='subtitle mt-1'>DIAGNÓSTICO:</h5>
                        <div style='height: 65px'>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                    
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <!-- Parte 8 -->        
                        <h5 class='subtitle mt-1'>RECOMENDACIONES/RESTRICCIONES:</h5>
                        <div style='height: 65px'>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                    <tr>
                                        <td>1) <span>Fgs</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td>
                        <!-- Firma -->
                        <table style='margin-top: 1em;' >
                            <colgroup>
                                <col style='width: 45%;'>
                                <col style='width: 50%;'>
                                <col style='width: 5%;'>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td style='border-bottom: 1px solid black;'>
                                        <img src='../images/firma.gif' class='img-firma'>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style='text-align: center; padding-top: 6px;'>
                                        <p>Nombre, Sello y Firma</p>
                                        <p>Médico que CERTIFICA</p>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

    
        <!-- Información -->
        <div style='bottom: 0; text-align: center; margin-top: 24px;'>
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
  $html2pdf->output('INFORME.pdf');

} catch(Html2PdfException $error){
  $html2pdf->clean();                               // Liberar recursos
  $formatter = new ExceptionFormatter($error);      // Formatear presentación
  echo $formatter->getHtmlMessage();                // Mostrar error

}
?>