<?php
  if(isset($_POST['impression']))
  {
    
$conn =new mysqli('localhost','root','','naftal2');

require('fpdf/fpdf.php');

$query =$conn->query("SELECT * FROM `serie`");

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell('190','20','Liste serie','0','1','C');


$pdf->SetFont('Arial','B',14);
$pdf->Cell('60','10','Num Serie','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('40','10','numero inv','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('40','10','desgination','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('60','10','numero equipement','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('35','10','garanti','1','1','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('60','10','numero utilisateur','1','1','C');


while($Equi=mysqli_fetch_array($query)) {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('40', '10', $Equi['num_ser'],'1','0','C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('60', '10', $Equi['num_inv'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['nom_ser'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('20', '10', $Equi['num_equ'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['duree_gr'],'1','1','C');
     $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['num_util'],'1','1','C');
  
  

  
}


$pdf->Output();


}
?>