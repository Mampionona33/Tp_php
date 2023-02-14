<?php

$text = file('text.txt', 0, null);
$removedEmptyLine = [];

foreach ($text as $key => $value) {
    if (strlen($value) > 2) {
        array_push($removedEmptyLine, $value);
    }
};

echo $removedEmptyLine[0];