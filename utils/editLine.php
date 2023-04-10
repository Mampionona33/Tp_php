<?php
include_once "db.php";
include_once "csvHeader.php";
include_once "resetCsv.php";
include_once "resetTxt.php";

function editLine($editId, $editData)
{

    $db = readDb();
    $tempData = [];
    foreach ($db as $key => $value) {
        if ($key == $editId) {
            $db[$key] = $editData;
        }
    }
    array_push($tempData, csvHeader(), implode($db));
    resetCsv(implode($tempData));
    resetTxt();
    header("Location: detail.php?id=$editId");
}
