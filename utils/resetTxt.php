<?php

function resetTxt()
{

    // définir les variables
    $fileName = dirname(__DIR__) . "/csv/monFichier.csv";
    if (is_file($fileName)) {
        $db = file($fileName, 0, null);
        // Delete all .txt files
        array_map('unlink', glob("csv/*.txt"));
        foreach ($db as $key => $value) {
            // Create file.txt
            if ($key > 0) {
                file_put_contents("csv/line_$key.txt", $value);
            }
        }
    } else {
        echo "file not exist in reset text file";
    }
}
