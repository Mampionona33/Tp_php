<?php

include("./krumo-0.4.4/class.krumo.php");

$nom = $_POST["nom"];
$nb1 = $_POST["nb1"];
$nb2 = $_POST["nb2"];

if ($nb1 !== "") {
    $nb1 = $nb1 * 1;
}
if ($nb2 !== "") {
    $nb2 = $nb2 * 1;
}

if (is_int($nb1) && is_int($nb2)) {
    // krumo($nb1);

    if ($nb1 < $nb2) {
        echo "le nombre le plus grand est $nb2, et le nombre le plus petit est $nb1.";
    } else if ($nb1 >  $nb2) {
        echo "le nombre le plus grand est $nb1, et le nombre le plus petit est $nb2.";
    } else {
        echo "les deux nombres ont la même valeur.";
    }

    echo '<br> <a href="page5.html" >Cliquez ici pour recommencer !!</a>';
} else {
    echo 'Vous n\'avez pas saisi deux nombres entiers. <a href="page5.html" > Veuillez réessayer.</a>';
}