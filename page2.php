<?php

$folderName = 'myFolder';

if (!is_dir($folderName)) {
    header("Location: page1.php");
    die();
} else {
    if (rmdir("./$folderName")) {
        echo "The folder has been successfully removed !";
    }
};