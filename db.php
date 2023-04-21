<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nom_de_la_base_de_donnees";

$mysqli = new mysqli($host, $username, $password);

if (!$mysqli) {
    echo "Not connected";
}
echo "connected";
