<?php

// show all error in browser
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "../utils/readTxt.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
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
    <title><?php echo $name ?> </title>
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <table>
        <tr>
            <td>Name:</td>
            <td> <?php echo $name ?> </td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td> <?php echo $lastName ?> </td>
        </tr>
        <tr>
            <td>Age:</td>
            <td> <?php echo $age ?> ans</td>
        </tr>
        <tr>
            <td>Sex:</td>
            <td> <?php echo $sex ?></td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td> <?php echo $tel ?></td>
        </tr>
        <tr>
            <td>Adress:</td>
            <td> <?php echo $adress ?></td>
        </tr>
    </table>

</body>

</html>