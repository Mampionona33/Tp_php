<?php

$folderName = 'myFolder';

if (!is_dir($folderName)) {
    if (mkdir("./$folderName", 0700, false, null)) {
        echo "The folder $folderName has been successfully created !";
    } else {
        echo "Error on attempting to create the folder";
    }
} else {
    header("Location: page2.php");
    die();
}