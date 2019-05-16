<?php
include "../../core/serviceC.php";
require('fpdf/fpdf.php');

	
 
 

$ServiceC = new ServiceC();
$resultat=$ServiceC->afficherServices();

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','',16); 
$pdf->Cell(40,35,"                                         "."Details de Service"); 
$pdf->Ln(); 

$pdf->Cell(40,10,"ID  "); 
$pdf->Cell(40,10,"Type  ");
$pdf->Cell(40,10,"Numero  ");


foreach($resultat as $row)
{
$pdf->Ln();
$pdf->Cell(40,10,$row['service_id']."  ");
$pdf->Cell(40,10,$row['service_type']."  ");
$pdf->Cell(40,10,$row['service_numero']."  ");
$pdf->Ln(); 
}
$pdf->Output("F","test.pdf");
 header('Location: test.pdf');
 






	
	

?>

	

	
	
	

