<?php
  if(isset($_POST['btnPDF']))
  {
    echo "coucou";
$conn =new mysqli('localhost','root','','naftal2');
require('fpdf.php');


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





$pdf->Output();


}
?>