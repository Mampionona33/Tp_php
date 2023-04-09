<?php

function readDb()
{
    $fileName = dirname(__DIR__) . "/csv/monFichier.csv";
    if (is_file($fileName)) {
        $db = file($fileName, 0, null);
        $temp = [];
        foreach ($db as $key => $value) {
            if ($key > 0) {
                array_push($temp, $value);
            }
        }
        return $temp;
    } else {
        echo "not such file";
    }
}
