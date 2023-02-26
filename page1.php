<?php

extract($_POST);
extract($_COOKIE);

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
    <div style="display: flex; flex-direction: row; gap: 1rem">
      <form
        action="page1.php"
        method="post"
        style="display: flex; flex-direction: row; gap: 1rem"
      >
        <label for="folderName">Nom du dossier</label>
        <input type="text" required name="folderName" />
        <input type="submit" name="createFolder" value="Create folder" />
      </form>
      <form action="page1.php" method="post">
        <input type="submit" name="deleteFolder" value="Delete folder" />
      </form>
    </div>
    <hr />
  </body>
</html>

';

if (isset($folderName) && !is_dir($folderName)) {
    if (isset($createFolder)) {
        if (mkdir("./$folderName", 0700, false, null)) {
            setcookie('folderToremove', $folderName);
            echo "The folder <b> $folderName </b> has been successfully created !";
        } else {
            echo "Error when attempting to create the folder";
        }
    }
}

if (isset($folderToremove)) {
    if (isset($deleteFolder)) {
        if (rmdir("./$folderToremove")) {
            setcookie('folderToremove', '');
            echo "The folder <b> $folderToremove </b> has been successfully removed !";
        } else {
            echo "Error when attempting to delete the folder";
        }
    }
} else {
    if (!isset($createFolder)) {
        echo "There is no folder to delete. Please create one.";
    }
}