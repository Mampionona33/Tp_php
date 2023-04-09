<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_POST["delete_id"])) {
        var_dump($_POST["delete_id"]);
        die();
    }
}
