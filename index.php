<?php $page = "index" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>

<body>
    <?php
    include "./components/navbar.php";
    include_once "./components/table.php";
    ?>
    <script src="./scripts/confirmDelete.js"></script>
    <script src="./scripts/checkAll.js"></script>
    <script src="./scripts/handleOnAddClicked.js"></script>
</body>

</html>