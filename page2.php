<?php

function readCsv($csvFile)
{
    if (!is_file($csvFile)) {
        header("Location: page1.php");
        die();
    } else {
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

}
;

readCsv('myCsv.csv');