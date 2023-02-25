<?php

$text = file('text.txt', 0, null);
$removedEmptyLine = [];
foreach ($text as $key => $value) {
    array_push($removedEmptyLine, $value);
};
echo '<p style="font-size: 1.5rem;"> Test avec file :</br>' . $removedEmptyLine[0] . '</p>';

// Test avec fopen
$text3 = fopen('text.txt', 'r');
$contents = fgets($text3);
echo '<hr/>Test avec fopen : <br/> <p style="font-size: 1.5rem;">' . $contents . '</p>';
fclose($text3);

// Test avec file_get_content
$text2 = file_get_contents('text.txt', false, null, 0);
$first = explode(htmlspecialchars(), $text2);
var_dump($first);
// echo '<hr/>Test avec file_get_content : <br/> <p style="font-size: 1.5rem;">' . $text2 . '</p>';