<?php

// BOUCLE FOR INCREMENT
echo 'Boucle "for" increment: <br/>';
for ($a = 0; $a < 2; $a++) {
    for ($i = 1; $i < 100; $i++) {
        echo ("$i - ");
    }
    echo "100";
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
    while ($c < 99) {
        $c++;
        echo ("$c - ");
    };
    echo "100";
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------

// BOUCLE FOR DECREMENT
echo 'Boucle "for" decrement: <br/>';
for ($i = 0; $i < 2; $i++) {
    for ($a = 100; $a > 1; $a--) {
        echo "$a -";
    }
    echo "1";
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
    while ($f > 2) {
        $f--;
        echo ("$f - ");
    };
    echo "1";
    echo "<hr/>";
};
echo "<hr/>";
// -------------------------------------------