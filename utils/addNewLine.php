<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "db.php";
include_once "csvHeader.php";
include_once "resetCsv.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
    function addNewLine($newLine)
    {
        $db = readDb();
        $newdata = [];
        $csvHeader = csvHeader();
        array_push($newdata, $csvHeader);
        array_push($newdata, $newLine);
        foreach ($db as $key => $value) {
            array_push($newdata, $value);
        }
        resetCsv($newdata);
        header("Location: $_SERVER[PHP_SELF]");
    }
}
