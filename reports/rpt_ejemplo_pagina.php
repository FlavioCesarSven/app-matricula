<?php 

require_once './rpt_ejemplo_enc_pie.php';
// Creación del objeto de la clase heredada
$pdf = new PDF("P", "mm", "A4");
$pdf -> SetMargins(20,20,20,20);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,20,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();

?>