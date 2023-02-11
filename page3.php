<?php
include("./krumo-0.4.4/class.krumo.php");

extract($_POST);


if ($age > 21 && $age < 40 && $sex == "Femme") {
    echo "Bonjour Madame, vous avez bien entre 21 et 40";
} else {
    echo "Désolé vous n'avez pas les condition requis";
}

echo ' <hr/> <form method="POST" action="page3_1.php">
<input type="submit" value="Recommencer" />
</form>';