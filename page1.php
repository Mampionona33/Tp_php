<?php

$folderName = 'myFolder';
extract($_POST);

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
      <form action="page1.php" method="post">
        <input type="submit" name="createFolder" value="Create folder" />
      </form>
      <form action="page1.php" method="post">
        <input type="submit" name="deleteFolder" value="Delete folder" />
      </form>
    </div>
    <hr>
  </body>
</html>

';

if (!is_dir($folderName)) {
    if (isset($deleteFolder)) {
        echo "There is no floder to delete. Please create a new one.";
    } elseif (isset($createFolder)) {
        if (mkdir("./$folderName", 0700, false, null)) {
            echo "The folder $folderName has been successfully created !";
        } else {
            echo "Error when attempting to create the folder";
        }
    }
} else {
    if (isset($deleteFolder)) {
        if (rmdir("./$folderName")) {
            echo "The folder has been successfully removed !";
        } else {
            echo "Error when attempting to delete the folder";
        }
    } else {
        echo "The folder alredy exist, click on delete button to remove it!!!";
    }
}