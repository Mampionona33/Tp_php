<?php
include_once "./db.php";
include_once "./utils/csvHeader.php";
function deleteOne($detetId)
{
    $db = readDb();
    $fileName = dirname(__DIR__) . "/csv/monFichier.csv";
    $temp_array = [];
    foreach ($db as $key => $val) {
        if ($key != $detetId) {
            array_push($temp_array, $val);
        }
    }
    $csvHeader = csvHeader();
    unlink($fileName);
    file_put_contents($fileName, $csvHeader .= implode($temp_array));
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
