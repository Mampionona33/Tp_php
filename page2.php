<?php

function readCsv($csvFile)
{
    $openFile = fopen($csvFile, "r");
    while (($data = fgetcsv($openFile)) !== false) {
        for ($i = 0; $i <= count($data); $i++) {
            if ($i < count($data) - 1) {
                print_r($data[$i]);
                echo '; ';
            } else {
                print_r($data[$i]);
            }
        }
        echo '</br>';
    }
}
;

readCsv('myCsv.csv');