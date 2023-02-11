<?php

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page3</title>
  </head>
  <body>
    <form action="page3.php" method="get">
      <label for="number">Saisir un nombre</label>
      <input type="number" name="number" id="number" required />
      <br />
      <br />
      <input type="submit" value="Ok" />
      <input type="reset" value="Recommencer" />
    </form>
  </body>
</html>';