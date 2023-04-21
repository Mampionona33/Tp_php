<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$dbname = "users";

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// initialisation de la base de donnée
if ($conn->query($sql) === TRUE) {
    echo "La table user a été créée avec succès";
} else {
    echo "Erreur lors de la création de la table: " . $conn->error;
}

$conn->close();
