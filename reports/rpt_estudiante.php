<?php 

require_once './fpdf/fpdf.php';
require_once '../controller/cEstudianteC.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../images/logo.png', 10, 10, -600);
    // Arial bold 15
    $this->SetFont("Arial", "B", 14);
    // Movernos a la derecha
    $this->Cell(0, 10, utf8_decode("IESTP VICTOR RAUL HAYA DE LA TORRE"), 0, 1 , 'C');
    // Título
    $this->Cell(0, 20, "REPORTES DE ESTUDIANTES", 0, 1 , 'C');
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    $this->SetFont("Arial", "", 11);
}
}

$pdf = new PDF('L', 'mm', 'A4');
$pdf -> SetMargins(7,20,20,20);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$oCont = new cEstudianteC();
$result = $oCont->listar();
//190
$pdf -> Cell(15, 10, utf8_decode("Nº"), 1,0,'C');
$pdf -> Cell(22, 10, utf8_decode("DNI"), 1,0,'C');
$pdf -> Cell(90, 10, "NOMBRE Y NOMBRES", 1,0,'C');
$pdf -> Cell(80, 10, utf8_decode("DIRECCIÓN"), 1,0,'C');
$pdf -> Cell(20, 10, utf8_decode("SEXO"), 1,0,'C');
$pdf -> Cell(55, 10, utf8_decode(" FECHA DE NACIMIENTO"), 1,1,'C');

foreach ($result as $row) {
    
    $fecha = $row["fnac_est"];
    $fecha = date("d/m/Y", strtotime($fecha));

    $pdf -> Cell(15, 10, $row["idestudiante"], 1,0,'C');
    $pdf -> Cell(22, 10, $row["ndni_est"], 1,0,'C');
    $pdf -> Cell(90, 10, utf8_decode($row["ESTUDIANTE"]), 1,0,'L');
    $pdf -> Cell(80, 10, utf8_decode($row["dire_est"]), 1,0,'L');
    $pdf -> Cell(20, 10, utf8_decode($row["sexo_est"]), 1,0,'C');
    $pdf -> Cell(55, 10, $fecha, 1,1,'C');
}
$pdf->Output();


?> 

