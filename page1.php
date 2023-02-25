<?php
extract($_POST);

if ($pas > $debut && $pas > $fin) {
    echo '
    <p> Le pas doit être supérieur au debut et au fin </p> 
    <form action="page1.html" method="post">
        <input type="submit" value="Recommencer">
    </form>
        ';
} else {
    if ($debut == $fin) {
        echo '
        <p> le debut ne doit pas être égale à la fin !! </p> 
        <form action="page1.html" method="post">
            <input type="submit" value="Recommencer">
        </form>
            ';
    } else if ($debut < $fin) {
        echo '<form action="page1.html" method="post">
            <input type="submit" value="Recommencer">
            </form>';
        for ($i = $debut; $i < $fin - $pas; $i += $pas) {
            echo "$i - ";
        }
        echo $i;
    } else {
        echo '<form action="page1.html" method="post">
            <input type="submit" value="Recommencer">
            </form>';
        for ($i = $debut; $i > $fin + $pas; $i -= $pas) {
            echo "$i - ";
        }
        echo $i;
    };
};