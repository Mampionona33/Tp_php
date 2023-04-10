<?php
function resetCsv($data)
{
    // $csvFile = dirname(dirname(__DIR__)  . "/csv/monFichier.csv");
    $parentDirectory = dirname(__DIR__);
    $parentDirectory .= "/csv/monFichier.csv";
    unlink($parentDirectory);
    file_put_contents($parentDirectory, $data);
}
