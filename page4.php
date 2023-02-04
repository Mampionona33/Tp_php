<?php
extract($_POST);
// include("./krumo-0.4.4/class.krumo.php");
// krumo($age);

echo "Nom : $name <br>";
echo "Age : $age <br>";

if ($age !== "" && $name !== "") {
    if ($age * 1 < 18) {
        echo "Bonjour M.$name, vous avez moins de 18 ans";
    } else if ($age * 1 > 18) {
        echo "Bonjour M.$name, vous avez plus de 18 ans";
    } else {
        echo "Bonjour M.$name, vous avez 18 ans";
    }
    echo "<hr/>";
}

echo '<form method="POST" action="page4.html">
<input type="submit" value="Recommencer" />
</form>';