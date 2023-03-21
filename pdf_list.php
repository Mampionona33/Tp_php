<?php
require("fpdf/fpdf.php");

$pdf = new FPDF();
$fileName = 'csv/monFichier.csv';

if (is_file($fileName)) {
    $db = file($fileName, 0, null);
} else {
    echo "file not exist";
}


if (isset($_POST["create_pdf_list"]) && count($db) > 0) {
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 12);
    $pdf->SetRightMargin(20);

    $height = 10;
    $width = 95;

    $x = $pdf->GetX();
    $y = $pdf->GetY();

    $pdf->SetFillColor(224, 235, 255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $pdf->Cell($width, $height, "Name", 1, 0, "C", true);
    $pdf->Cell($width, $height, "Last Name", 1, 0, "C", true);
    $pdf->Ln();

    foreach ($db as $key => $value) {
        if ($key != 0) {
            $line = explode(";", $value);
            $name = $line[0];
            $lastName = $line[1];

            $pdf->Cell($width, $height, $name, 1, 0, "j", false);
            $pdf->Cell($width, $height, $lastName, 1, 0, "j", false);
            $pdf->Ln();

        }
    }
}
$pdf->Output();
?>