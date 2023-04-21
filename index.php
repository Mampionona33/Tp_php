<?php
include "db.php";
include "Query.php";

$dbname = "db";

$newQuery = new Query($conn);

// initialisation de la base de données
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$newQuery->createDataBase($dbname);

// création de la table "users"
$sql = "CREATE TABLE IF NOT EXISTS users(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
user_name VARCHAR(100),
last_name VARCHAR(200),
email VARCHAR(200),
birth_day DATE,
age INT,
sex BOOLEAN
)";

$newQuery->createTable($dbname, $sql);

$conn->close();
