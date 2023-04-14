<?php
$page = "index";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>List</title>
</head>

<body>
    <?php
    include "./components/navbar_.php";
    include_once "./components/table.php";
    ?>
    <script src="./scripts/handleClikbtnToHomePage.js"></script>
    <script src="./scripts/handleClickExerciceJs.js"></script>
    <script src="./scripts/confirmDelete.js"></script>
    <script src="./scripts/checkAll.js"></script>
    <script src="./scripts/handleOnAddClicked.js"></script>
    <script src="./scripts/handleSubmitDeleteSelect.js"></script>
    <script src="./scripts/handleClickPreviewPdfList.js"></script>
    <script src="./scripts/handleDownloadPdfList.js"></script>
    <script src="./scripts/handleClickSearch.js"></script>
    <script src="./scripts/handleClickExerciceJs.js"></script>
</body>

</html>