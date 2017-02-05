<?php
/** 
 * Generate PDF with FPDF
 * pdf code will generate pdf file. 
 * @copyright http://naitiksakhiya.in - Please keep pdf comment intact 
 * @author contact@naitiksakhiya.in
 */
require('fpdf/fpdf.php'); 
$pdf = new FPDF(); // sizes allowed A3, A4 letter.
$pdf->SetDrawColor(0,80,180); // set drwing color
$pdf->SetFillColor(200,212,234); //set fill color
$pdf->SetTextColor(4,4,4); //Text color
$pdf->SetLineWidth(0.5); // Line Width
$pdf->Rect(10, 10, 188, 258, 'S'); // Draw rectangle
$pdf->Image('image path',12,18,40); // add image
$pdf->Ln(); // line breking
// Arial bold 15
$pdf->SetFont('Arial','B',20);
$pdf->Cell(25,0,'Naitik Sakhiya',0,0,'C'); // adding data on height of 25
$pdf->Output();
?>

