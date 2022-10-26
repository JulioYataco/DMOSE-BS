<?php

// Obteniendo enlace al archivo
require_once '../../vendor/autoload.php';

// Espacio de trabajo (namespace)

use Spipu\Html2Pdf\Exception\ExceptionFormatter as ExceptionExceptionFormatter;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\ExceptionFormatter;


// manejador de excepciones
try {
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
        line-height: 16px;
       }

       h2{font-size: 20px;}
       h3{ font-size: 18px;}
       strong{font-weight: bold;}
       
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

      .d-block{
        width: 100% !important;
        display: block !important;
      }
      .mt-1{ margin-top: 10px; }
      .mt-2{ margin-top: 20px; }
      .mb-1{ margin-bottom: 1em;}
      .mr-1{ margin-right: 1em;}
      .ml-1{ margin-left: 10px;}
      .ml-2{ margin-left: 20px;}

      .left{ float: left !important;}
      .right{ float: right !important;}
      .center{ display: inline-block !important;}
      .text-left{ text-align: left !important;}
      .text-right{ text-align: right !important;}
      .text-center{ text-align: center !important;}
      
      .text-bold{ font-weight: bold;}

      h1{color: darkBlue; text-align: center}
      table {
        border-collapse: collapse;
        width: 100%;
      }

      .vertical-align{ vertical-align: middle;}

      .border-tabla td, th{
        padding: 2px 5px;
        border: 1px solid #000;
        height: 1em;
        min-height: 12px;
      }

      .footer-pdf{
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        top: 110%;
        bottom: 0 !important;
        text-align: center;
      }

      .table-default td, th{ min-height: 11px; }

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
                        <h4 class='title text-left'>FICHA MÉDICO OCUPACIONAL</h4>
                    </td>
                </tr>
                <tr>
                    <td ></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Parte 1 -->
        <table class='border-tabla mb-1'>        
            <colgroup>
              <col style='width: 20%;'/>
              <col style='width: 13%;'/>
              <col style='width: 4%;'/>
              <col style='width: 4%;'/>
              <col style='width: 12%;'/>
              <col style='width: 4%;'/>
              <col style='width: 4%;'/>
              <col style='width: 10%;'/>
              <col style='width: 4%;'/>
              <col style='width: 4%;'/>
              <col style='width: 10%;'/>
              <col style='width: 4%;'/>
              <col style='width: 7%;'/>
            </colgroup>
            <tbody>
                <tr>
                    <td class='subtitle'>N° Ficha Médica:</td>
                    <td colspan='9'></td>
                    <td class='subtitle'>Fecha:</td>
                    <td colspan='2'>10/02/2022</td>
                </tr>
                <tr>
                    <td class='subtitle'>Tipo de Evaluación</td>
                    <td>Preocupacioal</td>
                    <td></td>
                    <td></td>
                    <td>Periódica</td>
                    <td>x</td>
                    <td></td>
                    <td>Retiro</td>
                    <td></td>
                    <td></td>
                    <td>Otros</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class='subtitle'>Lugar de Examen</td>
                    <td class='subtitle'>Departamento</td>
                    <td colspan='2'>Ica</td>
                    <td class='subtitle'>Provincia</td>
                    <td colspan='2'>Chincha</td>
                    <td class='subtitle'>Distrito</td>
                    <td colspan='5'>Chincha Alta</td>
                </tr>
 
            </tbody>
        </table>

        <!-- Parte 2 -->
        <table class='border-tabla mb-1'>  
          <tbody>
            <tr>
              <td colspan='2'>
                <h5 class='subtitle'>I. DATOS DE LA EMPRESA</h5>                
              </td>
            </tr>
            <tr>
              <td class='text-bold' style='width: 33%'>Razón Social</td>
              <td style='width: 67%'></td>
            </tr>
            <tr>
              <td class='text-bold'>Actividad Económica</td>
              <td ></td>
            </tr>
            <tr> 
              <td class='text-bold'>Lugar de Trabajo</td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Ubicación</td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold' >Puesto al que postula y/o en el que labora</td>
              <td> </td>
            </tr>
          </tbody>
        </table>

        <!-- Parte 3-->
        <table class='border-tabla mb-1'>
          <tbody>
            <tr>
              <td colspan='14' style='width: 85%'>
                <h5 class='subtitle'>II. FILIACIÓN DEL TRABAJADOR</h5>
              </td>
              <td style='width: 15%' rowspan='6' colspan='3'></td>
            </tr>
            <tr>
              <td colspan='3' class='text-bold' >Nombres y Apellidos</td>
              <td colspan='11'></td>
            </tr>
            <tr>
              <td colspan='3' class='text-bold'>Fecha de Nacimiento</td>
              <td colspan='11'></td>          
            </tr>
            <tr>
              <td class='text-bold'>DNI</td>
              <td></td>
              <td colspan='2' class='text-bold'>Pasaporte</td>
              <td></td>
              <td colspan='4' class='text-bold'>Carnet de Extranjería</td>
              <td></td>
              <td class='text-bold' colspan='2'>N°</td>
              <td colspan='2'>75484758</td>
            </tr>
            <tr>
              <td colspan='14' class='text-bold'>Domicilio Fiscal</td>
            </tr>
            <tr>
              <td colspan='4' class='text-bold'>Av./Calle/Pje/Sect./Gpo.</td>
              <td colspan='10'></td>             
            </tr>
            <tr>
              <td colspan='5' class='text-bold'>Número/Dpto/Interior/Mz. /Lt.</td>
              <td colspan='12'></td>
            </tr>
            <tr>
              <td colspan='1' class='text-bold'>Distrito</td>
              <td colspan='3'></td>
              <td colspan='3' class='text-bold'>Provincia</td>
              <td colspan='3'></td>
              <td colspan='3' class='text-bold'>Departamento</td>
              <td colspan='4'></td>
            </tr>
            <tr>
              <td colspan='4' class='text-bold'>Residencia en lugar de trabajo</td>
              <td class='text-bold'>SI</td>
              <td></td>
              <td class='text-bold'>NO</td>
              <td></td>
              <td colspan='2'></td>
              <td colspan='4' class='text-bold'>Residencia en lugar de trabajo</td>
              <td>56</td>
              <td colspan='2'>Años</td>
            </tr>
            <tr>
              <td>ESSALUD</td>
              <td></td>
              <td></td>
              <td>EPS</td>
              <td></td>
              <td></td>
              <td>OTRO</td>
              <td>x</td>
              <td></td>
              <td colspan='2'>SCTR</td>
              <td></td>              
              <td></td>
              <td>OTRO</td>
              <td>x</td>
              <td colspan='2'></td>
            </tr>    
            <tr>
              <td colspan='3' class='text-bold'>Correo Electrónico</td>
              <td colspan='6'></td>
              <td colspan='4' class='text-bold'>Teléfono</td>
              <td colspan='4'></td>
            </tr>
            <tr>
              <td colspan='2' class='text-bold'>Estado civil</td>
              <td colspan='6'></td>
              <td colspan='5' class='text-bold'>Grado de Instrucción</td>
              <td colspan='4'></td>
            </tr>
            <tr>
              <td colspan='3' class='text-bold'>N° total de hijos vivos</td>
              <td colspan='5'></td>
              <td colspan='5' class='text-bold'>N° de dependientes</td>
              <td colspan='4'></td>
            </tr>
          </tbody>
        </table>

        <!-- Parte 4 -->
        <table class='border-tabla mb-1 table-default'>
          <colgroup>
            <col style='width: 20%'/>
            <col style='width: 15%'/>
            <col style='width: 15%'/>
            <col style='width: 5%'/>
            <col style='width: 10%'/>
            <col style='width: 10%'/>
            <col style='width: 15%;'/>
            <col style='width: 10%'/>
          </colgroup>
          <thead>
            <tr>
              <th colspan='8' style='height: auto;'>
                III. ANTECENDENTES OCUPACIONALES
              </th>
            </tr>   
            <tr>
              <th>EMPRESA</th>
              <th>ÁREA DE TRABAJO</th>
              <th>OCUPACIÓN</th>
              <th colspan='2'>FECHA</th>
              <th>TIEMPO</th>
              <th>EXPOSICIÓN OCUPACIONAL</th>
              <th>EPP%</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td>I</td>
              <td></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
            </tr>     
            <tr>
              <td>F</td>
              <td></td>
            </tr>
                 
            <tr>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td>I</td>
              <td></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
            </tr>     
            <tr>
              <td>F</td>
              <td></td>
            </tr>     

            <tr>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td>I</td>
              <td></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
            </tr>     
            <tr>
              <td>F</td>
              <td></td>
            </tr>     

            <tr>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td>I</td>
              <td></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
              <td rowspan='2'></td>
            </tr>     
            <tr>
              <td>F</td>
              <td></td>
            </tr>     
          </tbody>
        </table>

        <!-- Parte 5 -->
        <table class='border-tabla mb-1'>
          <colgroup>
            <col style='width: 15%'/>
            <col style='width: 15%'/>
            <col style='width: 10%'/>
            <col style='width: 10%'/>
            <col style='width: 15%'/>
            <col style='width: 10%'/>
            <col style='width: 15%'/>
            <col style='width: 10%'/>
          </colgroup>
          <thead>
            <tr>
              <th colspan='8'>IV. ANTECEDENTES PATOLÓGICOS PERSONALES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class='text-bold'>Alergias:</td>
              <td></td>
              <td class='text-bold'>Diabetes:</td>
              <td></td>
              <td class='text-bold'>TBC:</td>
              <td></td>
              <td class='text-bold'>Hepatitis B:</td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>RAM:</td>
              <td></td>
              <td class='text-bold vertical-align' rowspan='2'>HTA:</td>
              <td rowspan='2'></td>
              <td class='text-bold'>ITS:</td>
              <td></td>
              <td class='text-bold'>Tifoidea:</td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Asma:</td>
              <td></td>
              <td class='text-bold'>Convulsiones:</td>
              <td></td>
              <td class='text-bold'>Otros:</td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Bronquitis:</td>
              <td></td>
              <td class='text-bold'>Neoplasia:</td>
              <td></td>
              <td colspan='4' rowspan='2'></td>
            </tr>
            <tr>
              <td class='text-bold'>Quemaduras:</td>
              <td colspan='3'></td>
            </tr>
            <tr>
              <td class='text-bold'>Cirugias:</td>
              <td colspan='3'></td>
              <td class='text-bold'>Intoxicaciones:</td>
              <td colspan='3'></td>
            </tr>
          </tbody>
        </table>

        <!-- Parte 6 -->
        <table class='border-tabla'>
          <colgroup>
            <col style='width: 25%'/>
            <col style='width: 25%'/>
            <col style='width: 25%'/>
            <col style='width: 25%'/>
          </colgroup>
          <thead>
            <tr>
              <th>Hábitos nocivos</th>
              <th>Tipo</th>
              <th>Cantidad</th>
              <th>Frecuencia</th>
            </tr>
          </thead> 
          <tbody>
            <tr>
              <td class='text-bold'>Alcohol:</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Tabaco:</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Drogas:</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class='text-bold'>Medicamentos:</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        
        <!-- Información -->
        <div class='footer-pdf'>
            <p >
              Calle 28 de Julio N° 397 Chincha Alta - Costado del Local Telefónica
            </p>
            <p>www.famisalud.com.pe</p>
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
  $html2pdf->output('FICHA_MEDICO.pdf');
} catch (Html2PdfException $error) {
  $html2pdf->clean();                               // Liberar recursos
  $formatter = new ExceptionFormatter($error);      // Formatear presentación
  echo $formatter->getHtmlMessage();                // Mostrar error

}
