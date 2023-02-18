<?php

// BOUCLE FOR INCREMENT
echo 'Boucle "for" increment: <br/>';
for ($a = 0; $a < 2; $a++) {
    for ($i = 1; $i < 99; $i += 2) {
        echo "$i - ";
    }
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
    $c = 1;
    echo "$c - ";
    while ($c < 99) {
        echo "$c - ";
        $c += 2;
    };
    echo $c;
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "for" decrement: <br/>';
for ($i = 0; $i < 2; $i++) {
    for ($a = 100; $a > 2; $a -= 2) {
        echo "$a -";
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
    while ($f > 2) {
        echo "$f - ";
        $f -= 2;
    };
    echo $f;
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------