<?php
extract($_GET);
include_once("./detail_head.php");
var_dump($id);

if (isset($id)) {
    $fileName = "./csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $id . ".txt");
        $test = explode(';', $content);
        echo 'Nom : ' . $test[0] . "<br/>" .
            'Prénom : ' . $test[1] . "<br/>" .
            'Age : ' . $test[2] . "<br/>" .
            'Sex: ' . $test[3] . "<br/>" .
            'Tel: ' . $test[4] . "<br/>" .
            'Adresse: ' . $test[5];
    } else {
        echo "file not existe";
    }
}

echo '
<hr/>
<form action="page1.php" method="post">
        <input type="submit" value="Return" />
</form>
';