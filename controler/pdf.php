<?php
require('fpdf.php');

function printer($results)
{
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,40,$results);


    //$pdf->SetFont('Arial','B',16);
    //$pdf->Cell(40,10,'Hello World Salut wesh éé !');

    $pdf->Output();
}

?>