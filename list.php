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

// inclure le fichier head
include './list_head.php';

// définir les variables
$fileName = 'csv/monFichier.csv';
$new_line = '';
if (is_file($fileName)) {
  $db = file($fileName, 0, null);
}

// handle formulair request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Handle delete line
  if ($_POST["delete_id"]) {
    $delete_id = $_POST["delete_id"];
    foreach ($db as $key => $value) {
      if ($key == $delete_id) {
        unset($db[$delete_id]);
      }
    }
    unlink($fileName);
    file_put_contents($fileName, $db);
    header("Location: list.php");
  }

  // Handle delete Selected
  if (isset($_POST["delete_selected"])) {
    if (isset($_POST["delete_ids"])) {
      $delete_ids = $_POST["delete_ids"];
      foreach ($delete_ids as $key => $value) {
        unset($db[$value]);
      }
      unlink($fileName);
      file_put_contents($fileName, $db);
      header("Location: list.php");
    }
  }
}
?>

<body>
  <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST" id="mainForm">
    <div class="sticky" style="top:0">
      <div style="display: flex; gap:1rem">

        <input class="button danger" type="submit" id="delete_selected" name="delete_selected" value="Delete selected">

        <input class="button info" id="download_pdf" type="submit" value="Download PDF" name="download_pdf">

        <input class="button info" id="preview_pdf" type="submit" value="Preview PDF" name="preview_pdf">

        <input class="button primary" id="add_new" type="submit" value="Add new">
      </div>
      <hr>
    </div>
    <table>
      <thead>
        <tr>
          <th>
            <form onsubmit="" action="page1.php" method="post">
              <input type="checkbox" name="select" onchange="checkAll(this)">
              <label for="select">Select</label>
            </form>
          </th>
          <th>Name</th>
          <th>Last Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Delete all .txt files
        array_map('unlink', glob("csv/*.txt"));

        foreach ($db as $key => $value) {
          if ($key != 0) {
            // Create file.txt
            file_put_contents("csv/line_$key.txt", $value);
            $line = explode(";", $value);
            $name = $line[0];
            $lastName = $line[1];
            $delete_action = $_SERVER["PHP_SELF"];
            echo "<tr>";
            echo "<td> <input type=\"checkbox\" name=\"delete_ids[]\" value=\"$key\"> </td>";
            echo "<td>$name</td>";
            echo "<td>$lastName</td>";
            echo "
        <td>  
          <div style=\"display: flex; gap:0.5rem; margin: 0 0.2rem\">
            <form action=\"$delete_action\" method=\"post\" style=\"display: flex; flex-direction: row\">
              <input type=\"hidden\" name=\"delete_id\" value=\"$key\">
              <input type=\"submit\" class=\"button danger\" value=\"Delete\" onclick=\"return confirmDelete();\">
              </form>
              
              <form action=\"detail.php\" methode=\"get\" style=\";display: flex; flex-direction: row\">
              <input type=\"hidden\"  name=\"id\" value=$key  \">
              <input type=\"submit\" class=\"button primary\" value=\"Details\">
              </form>
              </div>
              </td>
        </tr>
        ";
          }
        }
        ?>
      </tbody>
    </table>
  </form>
</body>