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

  isset($_POST['new_Name']) ? $new_line .= $_POST['new_Name'] . ';' : ';';
  isset($_POST['new_lastName']) ? $new_line .= $_POST['new_lastName'] . ';' : ';';
  isset($_POST['new_Age']) ? $new_line .= $_POST['new_Age'] . ';' : ';';
  isset($_POST['new_Sex']) ? $new_line .= $_POST['new_Sex'] . ';' : ';';
  isset($_POST['new_tel']) ? $new_line .= $_POST['new_tel'] . ';' : ';';
  isset($_POST['new_address']) ? $new_line .= $_POST['new_address'] . "\n" : "\n";

  // Handle add new line
  if (str_word_count($new_line) > 0 && !isset($_POST['action'])) {
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
    header("Location: list.php");
  }

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

  // Handle Edit from form
  if (isset($_POST['action']) && preg_match("/edit/i", $_POST['action']) && isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];
    foreach ($db as $key => $value) {
      if ($key == $edit_id) {
        $db[$key] = $new_line;
      }
    }
    unlink($fileName);
    file_put_contents($fileName, $db);
    header("Location: list.php");
  }

  // Handle search
  if (isset($_POST['search'])) {
    $search = $_POST['search'];
    // $temp = array(0 => "Name;LastName;age;sex;tel;address");
    $temp = [];
    foreach ($db as $key => $value) {
      if ($key > 0) {
        if (preg_match_all("/$search/i", explode(";", $value)[0]) || preg_match("/$search/i", explode(";", $value)[1])) {
          array_push($temp, $db[$key]);
        }
      }
    }
    $db = $temp;
  }

  // Handle Clear filter
  if (isset($_POST['search']) && isset($_POST["clearFilter"])) {
    header("Location: list.php");
  }
}
?>

<body>
  <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST" id="mainForm">
    <div class="sticky" style="top:0">
      <div style="display: flex; gap:1rem">

        <input class="button danger" type="submit" id="delete_selected" name="delete_selected" value="Delete selected">
        <input class="button info" id="download_pdf" type="submit" value="Download PDF" name="download_pdf" onclick="this.form.action='pdf_list.php'">
        <input class="button info" id="preview_pdf" type="submit" value="Preview PDF" name="preview_pdf" onclick="this.form.action='pdf_list.php'">
        <input class="button primary" id="add_new" type="button" value="Add new">
        <input type="text" name="search" id="search" value="" placeholder="Find">
        <input type="button" class="button info" value="Search" id="submit_search">
        <input type="button" class="button info" value="Clear filter" id="clearFilter" name="clearFilter">

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

    <!-- If no data found on filter -->
    <?php
    if (isset($_POST['search']) && count($db) == 0) {
      echo "No data found";
    }
    ?>
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
        console.log(mainForm);
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