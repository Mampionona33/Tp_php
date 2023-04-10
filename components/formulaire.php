<?php
include "../utils/readTxt.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET["id"])) {
        $fileContents = readTxt($_GET["id"]);
        $name = $fileContents[0];
        $lastName = $fileContents[1];
        $age = $fileContents[2];
        $sex = $fileContents[3];
        $tel = $fileContents[4];
        $adress = $fileContents[5];
        // var_dump($fileContents);
    }
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
    }
}
?>

<form action="" method="GET">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                            echo $name;
                                                        } ?>>
    </div>
    <div>
        <label for="name">Last name</label>
        <input type="text" name="lastName" id="lastName" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                                    echo $lastName;
                                                                } ?>>
    </div>
    <div>
        <label for="name">Age</label>
        <input type="text" name="age" id="age" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                            echo $age;
                                                        } ?>>
    </div>
    <label for="sex">Sex</label>
    <div class="sex">
        <div class="sex_container">
            <input type="radio" name="sex" id="female" value="F" checked <?php echo ($sex == "F") ? "checked" : ""; ?>>
            <label for="sex">F</label>
        </div>
        <div class="sex_container">
            <input type="radio" name="sex" id="male" value="M" <?php echo ($sex == "M") ? "checked" : ""; ?>>
            <label for="sex">M</label>
        </div>
    </div>
    <div>
        <label for="new_address">Adress</label>
        <input type="text" name="new_address" id="new_address" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                                            echo $adress;
                                                                        } ?>>
    </div>
    <label for="new_tel">Tel</label>
    <input type="text" name="new_tel" id="tel" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                            echo $tel;
                                                        } ?>>
    <div class="button_container">
        <input class="button secondary" type="reset" value="Reset">
        <input class="button primary" type="submit" value="Submit">
        <input type="submit" value="Back" onclick="history.back();">
    </div>

</form>