<?php 

// require_once './fpdf/fpdf.php';
require_once './rpt_plantillaEstudianteFicha.php';

require_once '../controller/cEstudianteC.php';

$pdf = new PDF("P", "mm", "A4");
$pdf ->SetMargins(10,10,10,10);
$pdf ->AddPage();
$pdf ->AliasNbPages();

$pdf -> Cell(20,10, utf8_decode("DNI"),1,0,'C');
$pdf -> Cell(75,10, utf8_decode("APELLIDOS"),1,0,'C');
$pdf -> Cell(75,10, utf8_decode("NOMBRES"),1,0,'C');
$pdf -> Cell(30,10, utf8_decode("FOTO"),1,1,'C');

$oCont = new cEstudianteC();
$row = $oCont->SelecById_Ficha(2);

    $pdf -> Cell(20, 20, $row["ndni_est"], 1,0,'C');
    $pdf -> Cell(75, 20, utf8_decode($row["apel_est"]), 1,0,'C');
    $pdf -> Cell(75, 20, utf8_decode($row["nomb_est"]), 1,0,'L');
    $pdf -> Cell(30, 20,  $pdf->Image('../'.$row['foto_est'], $pdf->GetX()+6, $pdf->GetY()+2, 8), 1,1,'C');

    $pdf->Output();

?> 
<!-- 
SELECT
	tb_estudiante.ndni_est, 
	tb_estudiante.apel_est, 
	tb_estudiante.nomb_est, 
	tb_estudiante.foto_est, 
	tb_estudiante.ncel_est, 
	tb_estudiante.cins_est, 
	tb_estudiante.dire_est, 
	tb_estudiante.sexo_est, 
	tb_estudiante.fnac_est, 
	tb_operador.nomb_ope, 
	tb_programa.nomb_pro, 
	tb_ubiego.ndis_ubi, 
	tb_ubiego.npro_ubi, 
	tb_ubiego.ndep_ubi, 
	tb_estudiante.idestudiante
FROM
	tb_programa
	INNER JOIN
	tb_estudiante
	ON 
		tb_programa.idprograma = tb_estudiante.idprograma
	INNER JOIN
	tb_operador
	ON 
		tb_estudiante.idoperador = tb_operador.idoperador
	INNER JOIN
	tb_ubiego
	ON 
		tb_estudiante.idubigeo = tb_ubiego.idubigeo  -->