<?php

$inputText = file('text.txt', 0, null);
$numberArray = [];

foreach ($inputText as $key => $value) {
    array_push($numberArray, $value * 1);
};

var_dump($numberArray);