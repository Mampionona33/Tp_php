<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
      .column {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      body {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
    </style>
  </head>
  <body style="display: flex; flex-direction: row;">
  <div class="column">
  <h1>With for loop</h1>
    <table border="1">';

$num = 1;
for ($l = 0; $l < 10; $l++) {
  echo '<tr >';
  for ($td = 0; $td < 10; $td++) {
    echo '<td >';
    echo '<p style="display: flex; margin: 1rem" >' . $num . '</p>';
    $num++;
    echo "</td>";
  }
  echo '</tr>';
};

echo '
</table>
  </div>
    <hr style="rotate: 0deg; margin:1rem"> 
    <div class="column">
      <h1>With while loop</h1>
      <table border="1">
';

$numWhile = 1;
$i = 1;
while ($i <= 10) {
  echo '<tr>';
  $j = 1;
  while ($j <= 10) {
    echo '<td> <p style="display: flex; margin: 1rem" >' . $numWhile . '</p> </td>';
    $numWhile++;
    $j++;
  }
  echo '</tr>';
  $i++;
}
echo '</table>
        </div>
        </body>
          </html> ';