<?php
function readTxt($id)
{
    $fileName = dirname(__DIR__) . "/csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents($fileName);
        $contentsArray = explode(';', $content);
    } else {
        echo "no such file";
    }
    return $contentsArray;
}
