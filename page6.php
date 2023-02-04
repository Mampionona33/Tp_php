<?php

include("./krumo-0.4.4/class.krumo.php");

extract($_POST);

if (str_ireplace('dupond', "Dupond", $nom) === "Dupond") {
    echo "Bravo M.Dupond, vous avez gagné.";
    echo ' <hr/> <form methode="post" action="page6.html" >
    <input type=submit value="Recommencez ?" />
    <form/>';
} else {
    echo 'Désolé M.' . $nom . ', vous avez perdu. <hr/> <form methode="post" action="page6.html" >
    <input type=submit value="Recommencez SVP" />
    <form/> ';
}