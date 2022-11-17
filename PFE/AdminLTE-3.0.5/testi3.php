<?php
  if(isset($_POST['impression']))
  {
    
$conn =new mysqli('localhost','root','','naftal2');

require('fpdf/fpdf.php');

$query =$conn->query("SELECT * FROM `fournisseur`");

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell('190','20','Liste des fournisseurs','0','1','C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','numero fournisseur','1','0','C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','nom fournisseur','1','0','C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','prenom fournisseur','1','0','C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','email fournisseur','1','0','C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','telephone','1','1','C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell('40','10','fax','1','1','C');


while($Equi=mysqli_fetch_array($query)) {
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['num_fou'],'1','0','C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['nom_fou'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['prenom_fou'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['email_fou'],'1','0','C');
  $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['tel'],'1','1','C');
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell('40', '10', $Equi['fax'],'1','1','C');
  
  

  
}


$pdf->Output();


}
?>