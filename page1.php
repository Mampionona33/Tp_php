<?php


/* 
créer un tableau avec titre
Nom Prenom Detail
En cliquant sur le detail, 
affiche tout les detail du fichier text correpondant
1 - créer bouton delete pour chaque ligne pour supprimer la ligne dans le csv
2 - créer bouton delete pour la page detail pour supprimer la ligne dans le csv
3 - créer bouton insert pour créer un nouvau ligne dans le csv
4 - créer bouton PDF pour créer un fichier pdf de la page detail ou page liste
5 - créer des case a cochée sur chaque ligne
*/
$server = $_SERVER['SERVER_NAME'];
$uri = $_SERVER['REQUEST_URI'];
$port = $_SERVER['SERVER_PORT'];



if (isset($uri)) {
  $based_url = "http://" . $server . $uri;
}
if (isset($_SERVER['SERVER_PORT'])) {
  $based_url = "http://" . $server . ":" . $port . "/page1.php";
}


$fileName = 'csv/monFichier.csv';
if (isset($_POST['delete_id'])) {
  $delete_id = $_POST['delete_id'];
}

if (isset($_POST["action"]) && isset($_POST["edit_id"])) {
  // var_dump($_POST);
  $action = $_POST["action"];
  $edit_id = $_POST["edit_id"];
}


if (isset($_POST['new_Name'])) {
  $new_Name = $_POST['new_Name'];
}
if (isset($_POST['new_lastName'])) {
  $new_lastName = $_POST['new_lastName'];
}
if (isset($_POST['new_Age'])) {

  $new_Age = $_POST['new_Age'];
}
if (isset($_POST['new_Sex'])) {

  $new_Sex = $_POST['new_Sex'];
}
if (isset($_POST['new_tel'])) {
  $new_tel = $_POST['new_tel'];
}
if (isset($_POST['new_address'])) {

  $new_address = $_POST['new_address'];
}
if (isset($_POST['delete_ids'])) {
  $delete_list = $_POST['delete_ids'];
}

$new_line = "";

isset($new_Name) ? $new_line .= $new_Name . ';' : ';';
isset($new_lastName) ? $new_line .= $new_lastName . ';' : ';';
isset($new_Age) ? $new_line .= $new_Age . ';' : ';';
isset($new_Sex) ? $new_line .= $new_Sex . ';' : ';';
isset($new_tel) ? $new_line .= $new_tel . ';' : ';';
isset($new_address) ? $new_line .= $new_address . "\n" : "\n";

$name = [];
$lastName = [];

include_once('head.php');
echo '
<div class="sticky" style="top:0">
  <div style="display: flex; gap:1rem">       
    
    <input class="button danger" type="submit" value="Delete selected">     

    <form action="pdf_list.php" method="post">
      <input class="button info" type="submit" value="Download PDF" name="download_pdf"> 
    </form>

    <form action="pdf_list.php" method="post">
      <input class="button info" type="submit" value="Preview PDF" name="preview_pdf"> 
    </form>
  
    <form action="formulaire.php" method="post">
      <input class="button primary" type="submit"  value="Add new">
    </form>
  </div>
  <hr>
</div>
  ';



if (is_file($fileName)) {
  $db = file($fileName, 0, null);
  // delete line from db
  if (isset($delete_id)) {
    foreach ($db as $key => $value) {
      if ($key == $delete_id) {
        unset($db[$delete_id]);
      }
      file_put_contents($fileName, $db);
    }
    // reinitialize $delete_id
    // header("Location:$based_url");
  }

  // delete selected
  if (isset($delete_list) && count($delete_list) > 0) {
    foreach ($delete_list as $key => $value) {
      unset($db[$value]);
    }
    unlink($fileName);
    file_put_contents($fileName, $db);
    // header("Location:$based_url");
  }

  // edit
  if (isset($action) && preg_match("/edit/i", $action) && isset($edit_id)) {
    var_dump($action);
    var_dump($edit_id);
  }

  // Add new line from add page
  if (str_word_count($new_line) > 0) {
    $temp_data = [];
    array_push($temp_data, $new_line);

    foreach ($db as $key => $value) {
      if ($key > 0) {
        array_push($temp_data, $value);
      }
    }
    foreach ($db as $key => $value) {
      if ($key > 0) {
        unset($db[$key]);
      }
    }
    $db = array_merge($db, $temp_data);
    unlink($fileName);
    if (file_put_contents($fileName, $db)) {
      file_get_contents($fileName);
    } else {
      echo 'error on add new line';
    }

    // header("Location:$based_url");
  }

  // delete all txt files
  array_map('unlink', glob("csv/*.txt"));


  // Populate table form all txt files
  foreach ($db as $key => $value) {
    if ($key != 0) {
      if (file_put_contents("csv/line_" . $key . ".txt", $value)) {
        $line = explode(';', $value);

        $name = $line[0];
        $lastName = $line[1];
        echo
          '<tr>
          <td> <input type="checkbox" name="delete_ids[]" value=' . $key . ' /> </td> 
          <td>' . $name . '</td> 
          <td> ' . $lastName . '</td>
          <td >
            <div style="display: flex; gap:0.5rem; margin: 0 0.2rem">  

            <form action="page1.php" method="post" style="display: flex; flex-direction: row">
              <input type="hidden" name="delete_id" value="' . $key . '">
              <input type="submit" class="button danger"  value="Delete" onclick="return confirmDelete();" >
            </form>

            <form  action="detail.php" methode="get" style=";display: flex; flex-direction: row">
              <input type="hidden" name="id" value=' . $key . ' ">
              <input type="submit" class="button primary" value="Details"  >
            </form>

            </div>         
          </td>
          </tr>';
      } else {
        echo "Error on creating" . $key . ".txt <br/>";
      }
    }
  }
  ;
} else {
  echo "The file dose not exist";
}

include_once('footer.php');