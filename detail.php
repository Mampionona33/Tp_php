<?php
include_once("./detail_head.php");

if (isset($id)) {
    $fileName = "./csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $id . ".txt");
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
<div class="box">
    <form action="page1.php" method="post" >
        <input type="submit" value="Return" >
    </form>
    <form action="page1.php" method="POST" >
        <input type="hidden" name="delete_id" value="' . $id . '">
        <input type="submit" value="Delete" >
    </form>
</div>
';
include_once('./footer.php');