<?php

$fileName = 'output.txt';
$data = "Bonjour";

if (file_put_contents($fileName, $data)) {
    echo "Le fichier $fileName à été créer";
}