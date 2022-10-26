<?php




// Obteniendo enlace al archivo
require_once '../../vendor/autoload.php';

// Espacio de trabajo (namespace)

use Spipu\Html2Pdf\Exception\ExceptionFormatter as ExceptionExceptionFormatter;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\ExceptionFormatter;


try {

    ob_start();
    include(dirname(__FILE__) . '/vistas/pdf_blanco.php');
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($data);
    $html2pdf->output('FICHA_MEDICO.pdf');

    $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('exemple03.pdf');
} catch (HTML2PDF_exception $e) {
    echo $e;
    exit;
}
