<?php
header("Content-Type: text/html; charset=iso-8859-1 ");
define('FPDF_FONTPATH','font');
require('fpdf.php');

$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetFont('Helvetica');
$pdf->Image('../img/logo.png',2.5,2.5,-300);
$pdf->SetFontSize('22');
$pdf->Cell(80, 15,utf8_decode('Solicitud de Crédito'),1,2,'C');
$pdf->Output();

?>