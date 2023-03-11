<?php
extract($_POST);

if (isset($key)) {
    $fileName = "./csv/line_" . $key . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $key . ".txt");
        $test = explode(';', $content);
        echo 'Nom : ' . $test[0] . "<br/>" .
            'Prénom : ' . $test[1] . "<br/>" .
            'Age : ' . $contesttent[2] . "<br/>" .
            'Sex: ' . $test[3] . "<br/>" .
            'Tel: ' . $test[4] . "<br/>" .
            'Adresse: ' . $test[5];
    } else {
        echo "file not existe";
    }
}