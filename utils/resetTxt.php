<?php

function resetTxt()
{

    // définir les variables
    $parentDirectory = dirname(__DIR__);
    $fileName = dirname(__DIR__) . "/csv/monFichier.csv";
    $txtPath = $parentDirectory . "/csv/*.txt";
    if (is_file($fileName)) {
        $db = file($fileName, 0, null);
        // Delete all .txt files
        array_map('unlink', glob($txtPath));

        foreach ($db as $key => $value) {
            // Create file.txt
            if ($key > 0) {
                $fileNumber = $key - 1;
                file_put_contents($parentDirectory . "/csv/line_$fileNumber.txt", $value);
            }
        }
    } else {
        echo "file not exist in reset text file";
    }
}
