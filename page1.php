<?php

function ecrire_bonjour()
{
  echo 'Bonjour le monde </br>';
};

echo "<hr/> <h1> Whith for loop  </h1>";
for ($i = 0; $i < 10; $i++) {
  ecrire_bonjour();
};

echo '<hr/> <h1> whith while loop  </h1> ';
$a = 0;
while ($a < 10) {
  ecrire_bonjour();
  $a++;
}