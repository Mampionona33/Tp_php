<?php

$fileName = 'input.txt';

function removeFile($fileName)
{

    if (is_file($fileName)) {
        if (unlink($fileName, null)) {
            echo "The file $fileName has been successfully removed";
        } else {
            echo "Error on attempting to remove $fileName";
        }
    } else {
        echo "This file does not exist";
    }
};

removeFile('input.txt');