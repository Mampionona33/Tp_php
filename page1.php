<?php

$inputText = file_get_contents('input.txt', false, null, 0);


if ($inputText) {
    echo $inputText;
} else {
    echo "the input file is empty";
}