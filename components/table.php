<?php
include_once "./components/renderTable.php";
include_once "./utils/deleteOne.php";
include_once "./utils/addNewLine.php";
include_once "./utils/deleteSelected.php";
include_once "./utils/handleSearch.php";


// Handle delete on in list
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET["search"])) {
        $filter = handleSearch($_GET["search"]);
        $search = $_GET["search"];
    }

    if (isset($_POST["delete_ids"])) {
        deleteSelected($_POST["delete_ids"]);
    }

    if (isset($_POST["delete_id"])) {
        deleteOne($_POST["delete_id"]);
    }

    if (
        isset($_POST["name"])
        && isset($_POST["lastName"])
        && isset($_POST["age"])
        && isset($_POST["sex"])
        && isset($_POST["tel"])
        && isset($_POST["address"])
    ) {
        $newLine = $_POST["name"] . ";" . $_POST["lastName"] . ";" . $_POST["age"] . ";" . $_POST["sex"] . ";" . $_POST["tel"] . ";" . $_POST["adress"] . "\n";

        if (($_POST["action"]) && preg_match_all("/create/i", $_POST["action"])) {
            addNewLine($newLine);
        }
    }
}

?>

<!-- <?php if (isset($filter)) { ?>
    <?php if (count($filter) <= 0) { ?>
        <p>No data found for the term: <?php isset($_GET["search"]) && print $_GET["search"]; ?></p>
    <?php } else { ?>
        <p>The result for the search <b><?php print $_GET["search"] ?></b> are : </p>
    <?php } ?>
<?php }  ?> -->

<div class="table_container_1">
    <?php if (isset($search) && count($filter) > 0) { ?>
        <div class="dialog ">
            <p class="info">Results of search term : <?php print $search ?> </p>
        </div>
    <?php } ?>
    <div class="table_container_2">
        <form action="" id="mainTableForm">
            <table>
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="select" onchange="checkAll(this)">
                        </th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php renderTable() ?>
                </tbody>
            </table>
        </form>
    </div>
</div>