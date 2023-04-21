<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nom_de_la_base_de_donnees";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($host, $username, $password, "test");

echo $mysqli->host_info;
