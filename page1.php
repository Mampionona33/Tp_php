<?php

// BOUCLE FOR INCREMENT
echo 'Boucle "for" increment: <br/>';
for ($a = 0; $a < 2; $a++) {
    for ($i = 1; $i < 99; $i++) {
        if ($i % 2) {
            echo "$i - ";
        }
    }
    echo "99";
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
    while ($c < 98) {
        $c++;
        if ($c % 2) {
            echo "$c - ";
        }
    };
    echo "99";
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "for" decrement: <br/>';
for ($i = 0; $i < 2; $i++) {
    for ($a = 100; $a > 2; $a--) {
        if ($a % 3) {
            echo "$a -";
        }
    }
    echo "2";
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "while" decrement: <br/>';
$e = 0;
while ($e < 2) {
    $e++;
    $f = 101;
    while ($f > 3) {
        $f--;
        if ($f % 3) {
            echo ("$f - ");
        }
    };
    echo "2";
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------