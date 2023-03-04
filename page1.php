<?php

$fileName = 'csv/monFichier.csv';

$db = file($fileName, 0, null);

foreach ($db as $key => $value) {
  if ($key != 0) {
    if (file_put_contents("csv/line_" . $key . ".txt", $value)) {
      echo "line_" . $key . ".txt has been sucessully created <br/>";
    } else {
      echo "Error on creating" . $key . ".txt <br/>";
    }
  }
};