<?php
include_once "db.php";
include_once "csvHeader.php";
include_once "resetCsv.php";
include_once "resetTxt.php";

function deleteSelected($selectedIds)
{
    $db = readDb();
    $fileName = dirname(__DIR__) . "/csv/monFichier.csv";
    $tempDb = [];
    foreach ($db as $key => $value) {
        foreach ($selectedIds as $selectedKeys => $selectedValue) {
            if ($key == $selectedValue) {
                unset($db[$key]);
            }
        }
    }
    array_push($tempDb, csvHeader(), implode($db));
    resetCsv(implode($tempDb));
    resetTxt();
    header("Location: .");
}
