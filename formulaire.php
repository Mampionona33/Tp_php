<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_GET['edit']) && isset($_GET['id'])) {
    // Get edite's id
    $action = $_GET["edit"];
    $edit_id = $_GET['id'];

    // Get db
    $fileName = "./csv/line_" . $edit_id . ".txt";;
    if (isset($fileName)) {
        $content = file_get_contents("./csv/line_" . $edit_id . ".txt");
        $contentsArray = explode(';', $content);

        $name = isset($contentsArray[0]) ? $contentsArray[0] : " ";
        $lastName = isset($contentsArray[1]) ? $contentsArray[1] : " ";
        $age = isset($contentsArray[2]) ? $contentsArray[2] : " ";
        $sex = isset($contentsArray[3]) ? $contentsArray[3] : " ";
        $tel = isset($contentsArray[4]) ? $contentsArray[4] : " ";
        $adress = isset($contentsArray[5]) ? $contentsArray[5] : " ";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .container {
            display: flex;
            justify-content: center;
            position: relative;
            height: 50vh;

        }

        .button {
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 5px 8px;
        }

        .button:hover {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        .danger {
            background-color: red;
            color: #fff;
        }

        .primary {
            background-color: #007bff;
            color: #fff;
        }

        .info {
            background-color: #17a2b8;
            color: #fff;
        }

        .success {
            background-color: #28a745;
            color: #fff;
        }

        .secondary {
            background-color: #565e64;
            color: #fff;
        }

        .box {
            display: flex;
            gap: 1rem;
        }

        .form {
            position: absolute;
            top: 50%;
            display: grid;
            grid-template-columns: repeat(2, auto);
            padding: 2rem;
            border-radius: 25px;
            background-color: #D3D3D3;
            gap: 1rem;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        .sex {
            display: flex;
            flex-direction: column;
        }

        .sex_container {
            display: flex;
        }

        .button_container {
            display: flex;
            justify-content: center;
            gap: 1rem;
            grid-column: 1/3;
        }
    </style>

</head>

<body>
    <div class="container">
        <form class="form" action="page1.php" method="post">
            <label for="new_Name">Name</label>
            <input type="text" name="new_Name" id="name" value="<?php echo $name ?>" required>
            <label for="new_lastName">Last name</label>
            <input type="text" name="new_lastName" id="lastName" value="<?php echo $lastName ?>" required>
            <label for="new_Age">Age</label>
            <input type="number" name="new_Age" id="age" min=1 value="<?php echo $age ?>" required>
            <label for="sex">Sex</label>
            <div class="sex">
                <div class="sex_container">
                    <input type="radio" name="new_Sex" id="female" value="F" <?php if ($sex == "F") {
                                                                                    echo "checked";
                                                                                } ?>>
                    <label for="new_Sex">F</label>
                </div>
                <div class="sex_container">
                    <input type="radio" name="new_Sex" id="male" value="M" <?php if ($sex == "M") {
                                                                                echo "checked";
                                                                            } ?>>
                    <label for="new_Sex">M</label>
                </div>
            </div>
            <label for="new_address">Adress</label>
            <input type="text" name="new_address" id="new_address" value="<?php echo $adress ?>">
            <label for="new_tel">Tel</label>
            <input type="text" name="new_tel" id="tel" value="<?php echo $tel ?>">
            <div class="button_container">
                <input class="button secondary" type="reset" value="Reset">
                <input class="button primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>