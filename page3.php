<?php
include("./krumo-0.4.4/class.krumo.php");
if (isset($_GET["checkbox"])) {
    $checkbox = $_GET["checkbox"];
}

// if ($checkbox) {
//     krumo($checkbox);
// }

echo "email : " . $_GET["email"] . "<br>";
echo "Commentaire : " . $_GET["comment"] . "<br>";
echo "Votre choix dans la liste : " . $_GET["liste"] . "<br>";

if (isset($checkbox)) {
    echo "Vos choix avec checkbox : ";
    for ($i = 0; $i < count($checkbox); $i++) {
        echo $checkbox[$i] . "; ";
    }
    echo "</br>";
} else {
    echo "Aucun valeur de checkbox n'est selectionner </br>";
}
echo "Votre choix avec des boutons radio : " . $_GET["radioBtn"] . "<br>";
echo "Le nom du fichier : " . $_GET["file"] . "<br>";