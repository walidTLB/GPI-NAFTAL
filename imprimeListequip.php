<?php
$conn =new mysqli('localhost','root','','naftal2');
require('fpdf/fpdf.php');
$reqEquip="select * from equipment";
$res=mysql_query($reqEquip);


$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell('190','20','Liste des equipements','0','1','C');



$pdf->SetFont('Arial','B',14);
$pdf->Cell('40','10','Num Serie','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('60','10','Designation','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('35','10','Marque','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('20','10','Type','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('35','10','Model','1','1','C');


while($Equi=mysql_fetch_array($res)) {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('40', '10', $Equi['num_eq'],'1','0','C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('60', '10', $Equi['nom_eq'],'1','0','C');
	$pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['quantite'],'1','0','C');
	$pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('20', '10', $Equi['num_tyequi'],'1','0','C');
	$pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['num_ma'],'1','1','C');
	

	
}


$pdf->Output();

?>