<?php
include_once("./detail_head.php");
require('./footer.php'); 

if (isset($id)) {
    $fileName = "./csv/line_" . $id . ".txt";
    if (is_file($fileName)) {
        $content = file_get_contents("./csv/line_" . $id . ".txt");
        $contentsArray = explode(';', $content);

        $name = isset($contentsArray[0]) ? $contentsArray[0] : " ";
        $lastName = isset($contentsArray[1]) ? $contentsArray[1] : " ";
        $age = isset($contentsArray[2]) ? $contentsArray[2] : " ";
        $sex = isset($contentsArray[3]) ? $contentsArray[3] : " ";
        $tel = isset($contentsArray[4]) ? $contentsArray[4] : " ";
        $adress = isset($contentsArray[5]) ? $contentsArray[5] : " ";


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
?>

<hr/>
<div class="box">    
        <form action="list.php" method="post" >
            <input type="submit" value="Return" class="button success" >
        </form>

        <form action="formulaire.php" method="GET">
            <input type="hidden" name="id" value="' . $id . '">
            <input class="button primary" type="submit" value="Edit" name="action"> 
        </form>
        
        <form action="pdf_detail.php" method="get">
            <input type="hidden" name="id" value="' . $id . '">
            <input class="button secondary" type="submit" value="Download PDF" name="download_pdf"> 
        </form>
        
        
        <form action="pdf_detail.php" method="get">
            <input type="hidden" name="id" value="' . $id . '">
        <input class="button secondary" type="submit" value="Preview PDF" name="preview_pdf"> 
    </form>
    <form action="list.php" method="POST" >
        <input type="hidden" name="delete_id" value="' . $id . '">
        <input type="submit" onclick="return confirmDelete();" class="button" value="Delete" style="background-color: red; color: #fff; cursor:pointer">
    </form>
  
</div>
