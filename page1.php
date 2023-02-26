<?php

$text = file('text.txt', 0, null);
$evenLine = [];
$nombreLigne = 0;

foreach ($text as $key => $value) {
    $nombreLigne++;
    // echo $nombreLigne;
    if ($nombreLigne  % 2) {
        array_push($evenLine, $value);
    }
};
echo '<h4> Le fichier original a : ' . $nombreLigne . ' lignes </h4><br/>';
echo '<hr/>';
echo '<p> Le fichier de sortie a : ' . count($evenLine)  . ' lignes </p><br/>';

foreach ($evenLine as $key => $value) {
    echo $evenLine[$key] . '<br/>';
};