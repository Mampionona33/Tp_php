<?php

function readCsv($csvFile)
{
    $openFile = fopen($csvFile, "r");
    while (($data = fgetcsv($openFile)) !== false) {
        for ($i = 0; $i < count($data); $i++) {
            print_r($data[$i] . ';');
        }
    }
}
;

readCsv('myCsv.csv');