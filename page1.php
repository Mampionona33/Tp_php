<?php

/* 
  créer un tableau avec titre
  Nom Prenom Detail

  En cliquant sur le detail, 
  affiche tout les detail du fichier text correpondant
*/

$fileName = 'csv/monFichier.csv';

// include_once('temp.php');

$tab = [];

if (is_file($fileName)) {
  $db = file($fileName, 0, null);
  array_map('unlink', glob("csv/*.txt"));
  foreach ($db as $key => $value) {
    if ($key != 0) {
      if (file_put_contents("csv/line_" . $key . ".txt", $value)) {
        // echo "line_" . $key . ".txt has been sucessully created <br/>";
        array_push($tab, "line_" . $key . ".txt");
      } else {
        echo "Error on creating" . $key . ".txt <br/>";
      }
    }
  };
} else {
  echo "The file dose not exist";
}

function showContent($val)
{
  $basedUrl = "http://localhost/Tp_php/";
  echo "
  <tr>
    <td>$val</td>
    <td><a href=\"http://$basedUrl\">Details</a></td>
  </tr>
  ";
}

include_once('head.php');
array_map("showContent", $tab);
include_once('footer.php');