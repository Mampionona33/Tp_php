<?php
/*
CREATE TABLE `exemple` (
`description` varchar(150) NOT NULL default ''
);
*/
// si formulaire envoyé
if (isset($_POST['description'])) {
    // connexion à la base de données
    $bdd = mysqli_connect('localhost', 'root', '', 'test')
        or die("Impossible de se connecter à la base de données");
    // protection des données
    $description = mysqli_real_escape_string($bdd, $_POST['description']);
    // insertion des données
    $sql = "INSERT INTO `exemple` (`description`) VALUES ('" . $description . "')";
    mysqli_query($bdd, $sql);
    // fin
    mysqli_close($bdd);
}