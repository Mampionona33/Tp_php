<?php

/* 
créer un tableau avec titre
Nom Prenom Detail
En cliquant sur le detail, 
affiche tout les detail du fichier text correpondant

1 - créer bouton delete pour chaque ligne pour supprimer la ligne dans le csv
2 - créer bouton delete pour la page detail pour supprimer la ligne dans le csv
3 - créer bouton insert pour créer un nouvau ligne dans le csv
4 - créer bouton PDF pour créer un fichier pdf de la page detail ou page liste
5 - créer des case a cochée sur chaque ligne

*/

$fileName = 'csv/monFichier.csv';

$name = [];
$lastName = [];

include_once('head.php');

echo '
<div style="display: flex; gap:1rem">
<form action="post">
    <input type="submit" value="Delete selected"> 
  </form>
  
  <form action="">
    <input type="submit" value="PDF"> 
   </form>
    
  <form action="">
    <input type="submit" value="Add new">
  </form>
</div>
<hr>
';


if (is_file($fileName)) {
  $db = file($fileName, 0, null);
  array_map('unlink', glob("csv/*.txt"));

  foreach ($db as $key => $value) {
    if ($key != 0) {
      if (file_put_contents("csv/line_" . $key . ".txt", $value)) {
        $line = explode(';', $value);

        $name = $line[0];
        $lastName =  $line[1];
        echo
        '<tr>
          <td> <input type="checkbox" /> </td> 
          <td>' . $name . '</td> 
          <td> ' . $lastName . '</td>
          <td> <a href="detail.php/id=' . $key . '" >Details</a> </td>
          </tr>';
      } else {
        echo "Error on creating" . $key . ".txt <br/>";
      }
    }
  };
} else {
  echo "The file dose not exist";
}

include_once('footer.php');