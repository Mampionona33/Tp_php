<?php
require_once "../components/Card.php";

$CardAddition = new Card("Addition");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Js</title>
</head>

<body>
    <p>Exercice JS</p>
    <?php echo $CardAddition->render() ?>
</body>

</html>