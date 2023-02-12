<?php

function compare2nb($nb1, $nb2)
{
  if ($nb1 == $nb2) {
    echo $nb1 . " est égale à " . $nb2 . "<br/>";
  } elseif ($nb1 > $nb2) {
    echo $nb1 . " est supérieur à " . $nb2 .  "<br/>";
  } else {
    echo $nb1 . " est inférieur à " . $nb2 .  "<br/>";
  }
};

compare2nb(1, 2);

compare2nb(3, 3);

compare2nb(3, 1);