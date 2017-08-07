<?php
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

ob_start();
require("print.php");

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->load_html(ob_get_clean());

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Certificado-WCMGA17.pdf", array("Attachment"=>0));
