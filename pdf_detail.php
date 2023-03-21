<?php
ob_start();
require("fpdf/fpdf.php");
include_once("./detail_head.php");

$pdf_detail = new FPDF();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


if (isset($id)) {
    $fileName = "./csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $id . ".txt");
        $contentsArray = explode(';', $content);

        $name = isset($contentsArray[0]) ? $contentsArray[0] : " ";
        $lastName = isset($contentsArray[1]) ? $contentsArray[1] : " ";
        $age = isset($contentsArray[2]) ? $contentsArray[2] : " ";
        $sex = isset($contentsArray[3]) ? $contentsArray[3] : " ";
        $tel = isset($contentsArray[4]) ? $contentsArray[4] : " ";
        $adress = isset($contentsArray[5]) ? $contentsArray[5] : " ";

        if (isset($_GET["download_pdf"]) || isset($_GET["preview_pdf"])) {

            // var_dump($_GET);
            $pdf_detail->AddPage();
            $pdf_detail->SetFont("Arial", "B", 12);
            $pdf_detail->SetRightMargin(20);

            $height = 9;
            $width = 95;

            $w_label = 30;

            $x = $pdf_detail->GetX();
            $y = $pdf_detail->GetY();

            // $pdf_detail->SetFillColor(224, 235, 255);
            // $pdf_detail->SetTextColor(0);
            // $pdf_detail->SetFont('');
            $pdf_detail->Cell($w_label, $height, "Name: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $name, 0, 0, "J", false);
            $pdf_detail->Ln();

            $pdf_detail->Cell($w_label, $height, "Lastname: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $lastName, 0, 0, "J", false);
            $pdf_detail->Ln();

            $pdf_detail->Cell($w_label, $height, "Age: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $age, 0, 0, "J", false);
            $pdf_detail->Ln();

            $pdf_detail->Cell($w_label, $height, "Sex: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $sex, 0, 0, "J", false);
            $pdf_detail->Ln();

            $pdf_detail->Cell($w_label, $height, "Tel: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $tel, 0, 0, "J", false);
            $pdf_detail->Ln();

            $pdf_detail->Cell($w_label, $height, "Adress: ", 0, 0, "J", false);
            $pdf_detail->Cell($width, $height, $adress, 0, 0, "J", false);
            $pdf_detail->Ln();
        }
    } else {
        echo "file not existe";
    }
}
ob_clean();
if (isset($_GET["download_pdf"])) {
    $pdf_detail->Output('D', "Details", false);
} else {
    $pdf_detail->Output();
}
