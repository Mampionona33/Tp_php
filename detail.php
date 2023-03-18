<?php
extract($_GET);
include_once("./detail_head.php");
var_dump($id);

if (isset($id)) {
    $fileName = "./csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $key . ".txt");
        $contentsArray = explode(';', $content);

        $name = isset($contentsArray[0]) ? $contentsArray[0]   : " ";
        $lastName = isset($contentsArray[1]) ? $contentsArray[1]  : " ";
        $age =  isset($contentsArray[2]) ? $contentsArray[2] : " ";
        $sex = isset($contentsArray[3])  ? $contentsArray[3] : " ";
        $tel = isset($contentsArray[4]) ?  $contentsArray[4] : " ";
        $adress =  isset($contentsArray[5]) ? $contentsArray[5] : " ";


        echo 'Nom : ' . $name . "<br/>" .
            'Prénom : ' . $lastName . "<br/>" .
            'Age : ' . $age . "<br/>" .
            'Sex: ' . $sex . "<br/>" .
            'Tel: ' . $tel . "<br/>" .
            'Adresse: ' . $adress;
    } else {
        echo "file not existe";
    }
}

echo '
<hr/>
<form action="page1.php" method="get">
        <input type="submit" value="Return" />
</form>
';
include_once('./footer.php');