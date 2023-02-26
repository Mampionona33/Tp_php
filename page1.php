<?php

$folderName = 'myFolder';
explode($_POST);

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="page1.php" method="post">
      <input type="submit" name="createsFolder" value="Create folder" />
      <input type="submit" name="deleteFolder" value="Delete folder" />
    </form>
  </body>
</html>
';

if (!is_dir($folderName)) {
    header("Location: page1.php");
    die();
} else {
    if (rmdir("./$folderName") && $_POST["deleteFolder"] == "Delete folder") {
        echo "The folder has been successfully removed !";
    }
};

// if (!is_dir($folderName)) {
//     if (mkdir("./$folderName", 0700, false, null)) {
//         echo "The folder $folderName has been successfully created !";
//     } else {
//         echo "Error on attempting to create the folder";
//     }
// } else {
//     header("Location: page2.php");
//     die();
// }