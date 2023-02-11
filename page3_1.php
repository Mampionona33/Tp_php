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
    <form action="page3.php" method="post">
    <label for="sex">Saisissez votre sex </label>
      <br/>
      <input type="radio" name="sex" value="Femme" checked /> Femme
      <input type="radio" name="sex" value="Homme" /> Homme
      <hr />
      <label for="age">Age</label>
      <input type="number" name="age" id="age" required min=0 />
      <br />
      <br />
      <input type="submit" value="Ok" />
      <input type="reset" value="Recommencer" />
    </form>
  </body>
</html>';