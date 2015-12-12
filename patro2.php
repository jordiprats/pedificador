<?php
require('fpdf.php');

$nom="Marc Prats";

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();

$pdf->SetFillColor(255,0,0);


for ($x = 0; $x < 8; $x++) {
  for ($y = 0; $y < 12; $y++) {
    $pdf->Rect(2+$x*36,14+$y*16,32,12,'F');
  }
}

$pdf->SetFillColor(255,255,255);
//$pdf->SetFillColor(0,0,0);

for ($x = 0; $x < 8; $x++) {
  for ($y = 0; $y < 12; $y++) {
    $pdf->Rect(3+$x*36,15+$y*16,30,10,'F');
  }
}

$pdf->Output();
?>
