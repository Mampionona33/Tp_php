<?php
include_once "./components/renderTable.php";
include_once "./utils/deleteOne.php";
include_once "./utils/addNewLine.php";

// Handle delete on in list
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
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

<div class="table_container_1">
    <div class="table_container_2">
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
    </div>
</div>