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
    }
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
    }
}
?>

<form action=<?php preg_match_all("/create/i", $action) ? print "../index.php" : print "detail.php?id=" . $_GET["id"]  ?> method="post">
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
        <input type="text" name="address" id="address" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                                    echo $adress;
                                                                } ?>>
    </div>
    <label for="tel">Tel</label>
    <input type="text" name="tel" id="tel" value=<?php if (preg_match_all("/edit/i", $action)) {
                                                        echo $tel;
                                                    } ?>>
    <div class="button_container">
        <input type="hidden" name="action" value="<?php echo isset($action) ? $action : null; ?>">
        <input type="hidden" name="id" value="<?php echo isset($_GET["id"]) ? $_GET["id"] : null; ?>">
        <input class="button secondary" type="reset" value="Reset">
        <input class="button primary" type="submit" value="Submit">
        <input type="submit" value="Back" onclick="history.back();">
    </div>

</form>