<?php

$fileName = 'myCsv.csv';

$list = array(
  array('aaa', 'bbb', 'ccc', 'dddd'),
  array('123', '456', '789'),
  array('"aaa"', '"bbb"')
);

if (!is_file($fileName)) {
  $fp = fopen($fileName, 'w');
  foreach ($list as $field) {
    fputcsv($fp, $field);
  }
  fsync($fp);
  fclose($fp);
  header("Location: page2.php");
  die();
} else {
  header("Location: page2.php");
  die();
}