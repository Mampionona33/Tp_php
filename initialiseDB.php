<?php
include "db.php";
include "Query.php";

$dbname = "db";

$newQuery = new Query($conn);

// initialisation de la base de données
$newQuery->createDataBase($dbname);

// création de la table "users"
$sql = "
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
user_name VARCHAR(100) NOT NULL,
last_name VARCHAR(200) NOT NULL,
email VARCHAR(200),
birth_day DATE,
age INT,
sex BOOLEAN
";

$newQuery->createTable($dbname, "users", $sql);

$conn->close();
