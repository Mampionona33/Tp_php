<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
  </head>
  <body>
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
  echo "</tr>";
};

echo '</table>
  </body>
  </html>
';