<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$sql = "CREATE DATABASE IF NOT EXISTS users";

// initialisation de la base de donnée
if ($conn->query($sql) === TRUE) {
    echo "La table mytable a été créée avec succès";
} else {
    echo "Erreur lors de la création de la table: " . $conn->error;
}

$conn->close();
