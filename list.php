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
// var_dump($_POST);
if (is_file($fileName)) {
  $unchande_db = file($fileName, 0, null);
  $db = file($fileName, 0, null);
  array_shift($db);
}

// handle formulair request
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {

  isset($_POST['new_Name']) ? $new_line .= $_POST['new_Name'] . ';' : ';';
  isset($_POST['new_lastName']) ? $new_line .= $_POST['new_lastName'] . ';' : ';';
  isset($_POST['new_Age']) ? $new_line .= $_POST['new_Age'] . ';' : ';';
  isset($_POST['new_Sex']) ? $new_line .= $_POST['new_Sex'] . ';' : ';';
  isset($_POST['new_tel']) ? $new_line .= $_POST['new_tel'] . ';' : ';';
  isset($_POST['new_address']) ? $new_line .= $_POST['new_address'] . "\n" : "\n";

  function createNew($newLine)
  {
    global $db, $unchande_db, $fileName;
    $db = array_merge([$newLine], $db);
    $temp = array_merge([array_shift($unchande_db)], $db);
    unlink($fileName);
    $val = "";
    foreach ($temp as $key => $value) {
      $val = $val .= $value;
    }
    ;
    file_put_contents($fileName, $val);
    header("Location: list.php");
  }

  // Handle add new line
  if (str_word_count($new_line) > 0 && !isset($_POST['action'])) {
    createNew($new_line);
  }
  // Handle delete line
  function deleteOne($detetId)
  {
    global $db, $unchande_db, $fileName;
    $temp_array = [];
    var_dump($detetId);
    foreach ($db as $key => $val) {
      if ($key == $detetId) {
        unset($db[$detetId]);
      } else {
        array_push($temp_array, $val);
      }
    }
    $header = array_shift($unchande_db);
    unlink($fileName);
    file_put_contents($fileName, implode(array_merge([$header], $temp_array)));
    header("Location: list.php");
  }

  if (isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];
    deleteOne($delete_id);
  }

  // Handle delete Selected
  function deleteMultipl($selectedIds)
  {
    global $db, $fileName, $unchande_db;
    $header = array_shift($unchande_db);
    $array_tmp = $db;
    foreach ($array_tmp as $key => $value) {
      foreach ($selectedIds as $selectedkey => $selectVal) {
        if ($key == $selectVal) {
          unset($array_tmp[$key]);
        }
      }
    }
    unlink($fileName);
    file_put_contents($fileName, $header .= implode($array_tmp));
    header("Location: list.php");
  }

  if (isset($_POST["delete_selected"]) && isset($_POST["delete_ids"])) {
    deleteMultipl($_POST["delete_ids"]);
  }

  // Handle Edit from form
  function handeEdit($editId)
  {
    global $db, $new_line, $fileName, $unchande_db;
    $temp_db = $db;
    $header = array_shift($unchande_db);
    foreach ($temp_db as $key => $value) {
      if ($key == $editId) {
        $temp_db[$key] = $new_line;
      }
    }
    unlink($fileName);
    file_put_contents($fileName, $header .= implode($temp_db));
    header("Location: list.php");
  }
  ;
  if (isset($_POST['action']) && preg_match("/edit/i", $_POST['action']) && isset($_POST['edit_id'])) {
    handeEdit($_POST['edit_id']);
  }

  // Handle search
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $temp = [];
    foreach ($db as $key => $value) {
      if (preg_match_all("/$search/i", explode(";", $value)[0]) || preg_match("/$search/i", explode(";", $value)[1])) {
        array_push($temp, $db[$key]);
      }
    }
    $db = $temp;
  }

  // Handle Clear filter
  if (isset($_GET['search']) && isset($_POST["clearFilter"])) {
    header("Location: list.php");
  }
}
?>

<body>
  <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST" id="mainForm">
    <div class="sticky " style="top:0">
      <div class="header" style="display: flex; gap:1rem">

        <input class="button danger" type="submit" id="delete_selected" name="delete_selected" value="Delete selected">
        <input class="button secondary" id="download_pdf" type="submit" value="Download PDF" name="download_pdf"
          onclick="this.form.action='pdf_list.php'">
        <input class="button secondary" id="preview_pdf" type="submit" value="Preview PDF" name="preview_pdf"
          onclick="this.form.action='pdf_list.php'">
        <input class="button primary" id="add_new" type="button" value="Add new">
        <input type="text" class="input" name="search" id="search" value="" placeholder="Find">
        <input type="button" class="button primary" value="Search" id="submit_search">
        <input type="button" class="button secondary" value="Clear filter" id="clearFilter" name="clearFilter">

      </div>
    </div>
    
    <?php isset($_GET['search']) ? print("<div class=\"alert \"> <p class=\"info alertChild\">Le résultat de la recherche avec le mot-clé : <b> {$_GET['search']}</b></p></div>") : ''; ?>

    <div class="table_container_1">
      <div class="table_container_2">
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
          <div  class=\"table_button\" style=\"display: flex; gap:0.5rem; margin: 0 0.2rem\">
            <form action=\"$delete_action\" method=\"post\" style=\"display: flex; flex-direction: row\">
              <input class=\"hidden\" type=\"hidden\" name=\"delete_id\" value=\"$key\">
              <input type=\"submit\" class=\"button danger\" value=\"Delete\" onclick=\"return confirmDelete();\">
              </form>
              
              <form action=\"detail.php\" methode=\"get\">
              <input class=\"hidden\" type=\"hidden\"  name=\"id\" value=$key  \">
              <input type=\"submit\" class=\"button primary\" value=\"Details\">
              </form>
              </div>
              </td>
          </tr>
        ";
            }

            ?>
            <!-- If no data found on filter -->
            <?php
              if (isset($_GET['search']) && count($db) == 0) {
                echo " 
                  <tr >
                    <td colspan=\"4\" style=\"font-size: 2rem;\" >No data found</td>
                  </tr>
                ";
              }
          ?>
          </tbody>
        </table>
      </div>
    </div>

    
    
    
  </form>

  <script>
    const mainForm = document.getElementById("mainForm");

    function checkAll(checkbox) {
      var checkboxes = document.getElementsByTagName('input');
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].type == "checkbox") {
          checkboxes[i].checked = checkbox.checked;
        }
      }
    };

    function confirmDelete() {
      return confirm('Do you really want to delete?');
    };

    // Search 
    (() => {
      const inputFind = document.getElementById('search');
      const submitSearch = document.getElementById("submit_search");

      submitSearch.addEventListener('click', () => {
        mainForm.setAttribute("action", "list.php");
        mainForm.setAttribute("method", "get");
        mainForm.submit();
      });
    })();

    // Clear filter
    (() => {
      const clearFilter = document.getElementById("clearFilter");
      const inputFind = document.getElementById('search');
      clearFilter.addEventListener("click", () => {
        mainForm.setAttribute("action", "list.php");
        mainForm.submit();
      })
    })();

    // Add new
    (() => {
      const add_new = document.getElementById("add_new");
      add_new.addEventListener("click", () => {
        mainForm.setAttribute("action", "formulaire.php");
        console.log(mainForm);
        mainForm.submit();
      })
    })();
  </script>
</body>