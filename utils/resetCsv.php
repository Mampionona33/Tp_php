<?php
function resetCsv($data)
{
    $parentDirectory = dirname(__DIR__);
    $parentDirectory .= "/csv/monFichier.csv";
    unlink($parentDirectory);
    file_put_contents($parentDirectory, $data);
}
