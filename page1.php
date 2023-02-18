<?php

$text = file('text.txt', 0, null);
$removedEmptyLine = [];

foreach ($text as $key => $value) {
    if (strlen($value) > 2) {
        array_push($removedEmptyLine, $value);
    }
};

echo '<p style="font-size: 1.5rem;">' . $removedEmptyLine[0] . '</p>';

// Test avec file_get_content
$text2 = file_get_contents('text.txt', false, null, 0);
echo '<hr/>Test avec file_get_content text2 : <br/> <p style="font-size: 1.5rem;">' . $text2 . '</p>';
var_dump($text2);
// Test avec fopen