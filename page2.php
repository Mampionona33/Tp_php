<?php

function readCsv($csvFile)
{
    $openFile = fopen($csvFile, "r");
    while (($data = fgetcsv($openFile)) !== false) {
        for ($i = 0; $i <= count($data); $i++) {
            if ($i < count($data)) {
                print_r($data[$i] . ';');
            }
        }
        // print_r($data);
    }
}
;

readCsv('myCsv.csv');