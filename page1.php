<?php

// Il faut considerer la porté des variables
echo 'Boucle "for" increment: <br/>';
for ($a = 0; $a < 2; $a++) {
    for ($i = 0; $i <= 99; $i++) {
        echo $i . ' - ';
    }
    // le $i est global
    echo $i;
    echo "<hr/>";
}
echo "<hr/>";
// -------------------------------------------

// BOUCLE WHILE INCREMENT
echo 'Boucle "while" increment: <br/>';
$b = 0;
while ($b < 2) {
    $b++;
    $c = 0;
    while ($c <= 100) {
        echo $c;
        if ($c < 100) {
            echo ' - ';
        }
        $c++;
    }
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "for" decrement: <br/>';
for ($i = 0; $i < 2; $i++) {
    for ($a = 100; $a >= 1; $a--) {
        echo "$a - ";
    }
    echo $a;
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "while" decrement: <br/>';
$e = 0;
while ($e < 2) {
    $e++;
    $f = 100;
    while ($f > 0) {
        if ($f > 0) {
            echo ("$f - ");
        }
        $f--;
    };
    echo $f;
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------