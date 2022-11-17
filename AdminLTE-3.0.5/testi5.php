<?php
  if(isset($_POST['impression']))
  {
    
$conn =new mysqli('localhost','root','','naftal2');

require('fpdf/fpdf.php');

$query =$conn->query("SELECT * FROM `etat`");

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell('190','20','Liste globale INV','0','1','C');


$pdf->SetFont('Arial','B',14);
$pdf->Cell('40','10','Num Serie','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('60','10','numero inv','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('35','10','etat','1','0','C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell('40','10','type','1','1','C');


 
while($Equi=mysqli_fetch_array($query)) {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('40', '10', $Equi['num_serie'],'1','0','C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('60', '10', $Equi['num_invent'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('35', '10', $Equi['desc_etat'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell('40', '10', $Equi['type'],'1','1','C');
  
  

  
}


$pdf->Output();


}
?>