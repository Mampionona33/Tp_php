<?php

// show all error in browser
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "../utils/readTxt.php";
include_once "../utils/editLine.php";
include_once "../utils/resetTxt.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {

    // Handle Edit
    if (
        isset($_POST["name"])
        && isset($_POST["lastName"])
        && isset($_POST["age"])
        && isset($_POST["sex"])
        && isset($_POST["tel"])
        && isset($_POST["address"])
        && $_POST["action"]
        && preg_match_all("/edit/i", $_POST["action"])
    ) {
        $newLine = $_POST["name"] . ";" . $_POST["lastName"] . ";" . $_POST["age"] . ";" . $_POST["sex"] . ";" . $_POST["tel"] . ";" . $_POST["adress"] . "\n";
        editLine($_POST["id"], $newLine);
    }

    if (isset($_GET["id"])) {
        $fileName = readTxt($_GET["id"]);

        $name = $fileName[0];
        $lastName = $fileName[1];
        $age = $fileName[2];
        $sex = $fileName[3];
        $tel = $fileName[4];
        $adress = $fileName[5];

        // Set the value of $page variable to 'detail'
        $page = "detail";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title><?php echo $name ?> </title>
</head>

<body>
    <!-- <?php include "../components/navbar.php" ?> -->
    <!-- <?php include "../components/navbar_.php" ?> -->
    <div class="box ">
        <div class="detailElement ">

            <p>Name:</p>
            <p> <?php echo $name ?> </p>

            <p>Last name:</p>
            <p> <?php echo $lastName ?> </p>

            <p>Age:</p>
            <p> <?php echo $age ?> ans</p>

            <p>Sex:</p>
            <p> <?php echo $sex ?></p>

            <p>Tel:</p>
            <p> <?php echo $tel ?></p>

            <p>Adress:</p>
            <p> <?php echo $adress ?></p>
        </div>
    </div>
</body>

</html>