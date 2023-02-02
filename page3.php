<?php
include("./krumo-0.4.4/class.krumo.php");

extract($_GET);

echo "Vous avez saisie: <hr/> email : $email; <br/> comment: $comment; <br/> list: $liste; <br/>";

if (isset($_GET["checkbox"])) {
    echo "checkbox : ";
    foreach ($_GET["checkbox"] as $val) {
        echo "$val ;";
    }
    echo "<br/>";
}

echo "radioBtn : $radioBtn; <br/> file : $file; <hr/> ";