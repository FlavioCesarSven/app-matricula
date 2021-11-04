<?php 

require_once './fpdf/fpdf.php';

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont("Arial", "B", 14);
$pdf -> Cell(0, 10, "Bienvenido a los Reportes en PHP", 1, 1 , 'C');
$pdf -> SetFont("Arial", "", 11);
$pdf -> Cell(0, 10, "Texto del Reporte", 0, 1 , 'L');
$pdf -> Ln(10);

$pdf -> Cell(20, 10, utf8_decode("Nº"), 1,0,'C');
$pdf -> Cell(100, 10, "NOMBRE", 1,0,'C');
$pdf -> Cell(70, 10, utf8_decode("CANCION FAVORITA"), 1,1,'C');

$pdf -> Cell(20, 10,"1", 1,0,'C');
$pdf -> Cell(100, 10, utf8_decode("FLAVIO CESAR PS"), 1,0,'L');
$pdf -> Cell(70, 10, "LINKIN PARK", 1,1,'L');

$pdf -> Cell(20, 10,"2", 1,0,'C');
$pdf -> Cell(100, 10, utf8_decode("ALEXANDRE ROJAS"), 1,0,'L');
$pdf -> Cell(70, 10, "LINKIN PARK", 1,1,'L');
$pdf -> Output();

?> 