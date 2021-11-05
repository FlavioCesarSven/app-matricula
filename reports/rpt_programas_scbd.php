<?php 

require_once './fpdf/fpdf.php';

require_once '../controller/cProgramasC.php';

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> Image('../images/logo.png', 10, 10, -600);
$pdf -> SetFont("Arial", "B", 14);
$pdf -> Cell(0, 10, utf8_decode("IESTP VICTOR RAUL HAYA DE LA TORRE"), 0, 1 , 'C');
$pdf -> Cell(0, 20, "PROGRAMAS DE ESTUDIO", 0, 1 , 'C');
$pdf -> SetFont("Arial", "", 11);

$pdf -> Cell(10, 10, utf8_decode("Nº"), 1,0,'C');
$pdf -> Cell(90, 10, "NOMBRE", 1,0,'C');
$pdf -> Cell(70, 10, utf8_decode("DESCRIPCION"), 1,0,'C');
$pdf -> Cell(20, 10, utf8_decode("ESTADO"), 1,1,'C');

$oCont = new cProgramasC();
$result = $oCont->listar();

foreach ($result as $row) {
    
    $pdf -> Cell(10, 10, $row["idprograma"], 1,0,'C');
    $pdf -> Cell(90, 10, utf8_decode($row["nomb_pro"]), 1,0,'L');
    $pdf -> Cell(70, 10, utf8_decode($row["desc_pro"]), 1,0,'L');
    $pdf -> Cell(20, 10, $row["estd_pro"], 1,1,'C');
}

$pdf -> Output();

?> 