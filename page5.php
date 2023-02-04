<?php

include("./krumo-0.4.4/class.krumo.php");

extract($_POST);

if ($nb1 && $nb2) {
    if ($nb1 > $nb2) {
        echo "le nombre le plus grand est $nb1, et le nombre le plus petit est $nb2.";
    } elseif ($nb1 < $nb2) {
        echo "le nombre le plus grand est $nb2, et le nombre le plus petit est $nb1.";
    } else {
        echo "Les deux nombres sont égaux.";
    }
    echo ' <hr/> <form methode="post" action="page5.html" >
    <input type=submit value="Recommencez ?" />
    <form/>';
} else {
    echo 'Vous n\'avez pas saisit deux nombres: <hr/> <form methode="post" action="page5.html" >
    <input type=submit value="Recommencez SVP" />
    <form/> ';
}