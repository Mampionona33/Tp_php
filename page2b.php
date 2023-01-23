<?php
$tab = array("bonjour1", "bonjour2", "bonjour3", "bonjour4", "bonjour5", "bonjour6");

echo   "<table>";
echo "<tr><td>$tab[0]</td><td>$tab[1]</td></tr>";
echo "<tr><td>$tab[2]</td><td>$tab[3]</td></tr>";
echo "<tr><td>$tab[4]</td><td>$tab[5]</td></tr>";
echo   "<table>";

echo "<hr/>";

echo   "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr><td>{$tab[2 *$i]}</td><td>{$tab[2 *$i + 1]}</td></tr>";
};
echo   "<table/>";

echo "<hr/>";

echo   "<table>";
for ($i = 0; $i < 6; $i++) {
    if ($i == 0 || $i == 2 || $i == 4)
        echo "<tr>";
    echo "<td>$tab[$i]</td>";
    if ($i == 1 || $i == 3 || $i == 5)
        echo "</tr>";
}
echo   "<table/>";