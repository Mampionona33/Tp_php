<?php

$inputText = file_get_contents('input.txt', false, null, 0);
$outputFile = "output.txt";

if ($inputText) {
    if (file_put_contents($outputFile, $inputText)) {
        echo "Le fichier $outputFile a bien été créer !";
    } else {
        echo "erreur lors de la création du fichier $outputFile";
    }
} else {
    echo "the input file is empty";
}