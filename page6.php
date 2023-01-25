<?php

$name = $_POST["nom"];
$regExp = "/dupond/i";

if ($name !== "") {
    if (preg_match($regExp, $name) === 1) {
        echo "Bravo M. Dupond, vous avez gagné.";
    } else {
        echo "Désolé M. $name, vous avez perdu.";
    }
    echo '<br> <a href="page6.html" >Cliquez ici pour recommencer !!</a>';
} else {
    echo 'Veuillez saisir un nom  <a href="page6.html" > Veuillez réessayer.</a>';
}