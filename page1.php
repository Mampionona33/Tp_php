<?php

$fileName = 'myCsv.csv';

$list = array(
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

if (!is_file("$fileName")) {
    echo "file not exist";
}