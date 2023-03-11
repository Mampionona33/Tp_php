<?php

/* 
  Exercice 1
  créer un triangle avec *
  *
  **
  ***
  ****
  *****
  ******

  exercice 2
  céer un tableau sans doublon de array1 = [1,2,3,3,4,5,5,6,7]
*/

$lignes = [1, 2, 3, 4, 5, 6];

foreach ($lignes as $val) {
  for ($i = 0; $i < $val; $i++) {
    echo '*';
  }
  echo '<br/>';
};