<?php
include_once "./components/renderTable.php";
include_once "./utils/deleteOne.php";

// Handle delete on in list
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_POST["delete_id"])) {
        deleteOne($_POST["delete_id"]);
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