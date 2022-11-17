<?php
require('../FPDF/fpdf.php');
class myPDF extends FPDF{
    
// En-tête
function Header(){
    $this->Image('logo.jpg',10,6,30);
   $this->SetFont('Arial','B','14');
   $this->Cell(276,5,'DEMENDE INTERVENTION',0,0,'C');
    $this->Ln();
    $this->SetFont('tIMES','','12');
    $this->Cell(276,10,'AU DEPARTEMENT INFORMATIQUE ',0,0,'C');
    $this->Ln(10);
    $this->Cell(276,10,'Merci de remplir ce formulaire pour un meuilleur suivi des anomalies informatiques',0,0,'C');
    $this->Ln();
    $this->Cell(276,10,'les problemes rencontres seront traites selon un protocole d urgence',0,0,'C');
    $this->Ln(15);
      
    
}
        function Footer()
        {
        $this->Ln(50); 
        $this->Cell(276,10,'Merci de nous deposer ce document au secretariat dudepartement informatique',0,0,'L');
        $this->Ln();  
        $this->SetFont('Times','IB',11);
         for($i=0;$i<=0;$i++)
       $this->Cell(0,10,'Recu le:'.$i,0,1);   
       $this->SetY(-15);
       $this->SetFont('Times','IB',11);
       $this->Cell(65,10,'- NAFTAL DISTRICT COM ALGER -  ',0,0,'L');
	   
	 
       $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
            
}
   function headerTable(){
       $this->SetFont('Times','B',12);
       $this->Cell(276,10,'Materiel: ',0,0,'L');
       $this->Ln(10);
       $this->Cell(40,10,'Type',1,0,'C');
       $this->Cell(40,10,'Marque',1,0,'C');
       $this->Cell(40,10,'Num_serie',1,0,'C');
       $this->Cell(150,10,'Observations',1,40,'C');
       
            
   }         
}
  
    
$pdf= new myPDF();
$pdf->AliasNbPages();
$link = $pdf->AddLink();
$pdf->AddPage( 'L','A4',0);
$pdf->SetFont('Times','',12);
for($i=0;$i<=0;$i++)
$pdf->Cell(0,10,'Num:'.$i,0,1);
for($i=0;$i<=0;$i++)
    $pdf->Cell(0,10,'Date:'.$i,0,1);
for($i=0;$i<=0;$i++)
    $pdf->Cell(0,10,'Nom Utilisateur:'.$i,0,1);
for($i=0;$i<=0;$i++)
 $pdf->Cell(0,10,'Structure:'.$i,0,1);
$pdf->headerTable();

$pdf->Output();


