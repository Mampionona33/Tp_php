<?php

// Configuration de la base de données
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";
$table = "exemple";

$sql = "SELECT * FROM $table";

try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
    foreach ($dbh->query($sql) as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// Connexion à la base de données
// $mysqli = new mysqli($host, $username, $password, $dbname);

// Vérification des erreurs de connexion
// if ($mysqli->connect_error) {
//     die('Erreur de connexion (' . $mysqli->connect_errno . ') '
//         . $mysqli->connect_error);
// }
// echo nl2br("Connect successfully to the database : $dbname <hr/> \n");


// Requête SQL
// $sql = "SELECT * FROM $table";

// Exécution de la requête
// if ($result = $mysqli->query($sql)) {
    // Traitement des résultats
    // echo nl2br('Select table' . ' "' . $table . '"' . ": \n");
    // while ($row = $result->fetch_row()) {
    //     echo nl2br("{$row[0]}\n");
    // }
    // Libération des résultats
    // $result->free();
// } else {
    // Gestion des erreurs d'exécution de la requête
    // echo "Erreur: " . $mysqli->error;
// }

// Fermeture de la connexion
// $mysqli->close();

// $link = mysqli_connect('localhost', 'root', '')
// or die("Impossible de se connecter : " . mysqli_error($link));
// echo 'Connexion réussie <hr />';
// $dbname = 'test';

// $sql = "SHOW TABLES FROM $dbname";
// $result = mysqli_query($link, $sql);
// echo "Liste des tables dans la base de donnée test : <br />";
// while ($row = mysqli_fetch_row($result)) {
// echo "Table: {$row[0]}\n";
// }

// mysqli_free_result($result);