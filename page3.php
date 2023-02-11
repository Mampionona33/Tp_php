<?php
include("./krumo-0.4.4/class.krumo.php");

extract($_POST);

echo "Vous avez saisie:  $number <br/> <hr/> ";

if (fmod($number, 5) == 0 && fmod($number, 3) == 0) {
    echo "Le nombre est multiple de 3 et 5";
} else {
    echo "Le nombre n'est pas multiple de 3 et 5";
}

echo ' <hr/> <form method="POST" action="page3_1.php">
<input type="submit" value="Recommencer" />
</form>';