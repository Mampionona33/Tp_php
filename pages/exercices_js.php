<?php
require_once "../components/Card.php";

// Card Additon
$CardAddition = new Card("Addition");
$CardAddition->addElement('<form id="formAdd" method="post" style="display:flex; flex-direction:column; gap:1rem">');
$CardAddition->addElement('<input type="number" required class="" placeholder="Number 1" id="nb1"  >');
$CardAddition->addElement('<input type="number" required class="" placeholder="Number 2" id="nb2" >');
$CardAddition->addElement('<input type="submit" class="button primary" id="makeAdd" value="Make an addition" >');
$CardAddition->addElement('</form>');

// Converion min to sec
$CardMinToSec = new Card("Min to Sec");
$CardMinToSec->addElement('<input type="button" class="button primary" id="minToSec" value="Convert min to sec" onclick="minToSec(1)" >');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Js</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <?php include "../components/navbar.php" ?>

    <div class="bodyContainer">
        <?php echo $CardAddition->render() ?>
        <?php echo $CardMinToSec->render() ?>
    </div>

    <script src="../scripts/exercices_js/addition.js"></script>
    <script src="../scripts/exercices_js/minToSec.js"></script>
</body>

</html>