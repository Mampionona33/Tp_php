<?php

/* 
créer un tableau avec titre
Nom Prenom Detail
En cliquant sur le detail, 
affiche tout les detail du fichier text correpondant
*/

$fileName = 'csv/monFichier.csv';

$name = [];
$lastName = [];

if (is_file($fileName)) {
    $db = file($fileName, 0, null);
    array_map('unlink', glob("csv/*.txt"));

    foreach ($db as $key => $value) {
        if ($key != 0) {
            if (file_put_contents("csv/line_" . $key . ".txt", $value)) {
                $line = explode(';', $value);
                array_push($name, $line[0]);
                array_push($lastName, $line[1]);
            } else {
                echo "Error on creating" . $key . ".txt <br/>";
            }

        }
    }
    ;
} else {
    echo "The file dose not exist";
}

function tabContent($arrayName, $arrayLastName)
{
    for ($i = 0; $i < count($arrayName); $i++) {
        echo '<tr> <td>' . $arrayName[$i] . '</td> <td> ' . $arrayLastName[$i] .

            "<td>
            <form action=\"detail.php\" method=\"post\"> 
                <input type=\"hidden\" name=\"key\" value=\"$i\" />            
              <input type=\"submit\" value=\"Details\" name=\"details\" />
            </form>
          </td>
         </td> </tr>";
    }
}


include_once('head.php');
tabContent($name, $lastName);
include_once('footer.php');