<?php
require_once "../components/Card.php";


// Card Additon
$CardAddition = new Card("Addition");
$CardAddition->addElement('<form method="post" id="formAdd" method="post" class="card-form">');
$CardAddition->addElement('<input type="number" required class="" placeholder="Number 1" id="nb1Add"  >');
$CardAddition->addElement('<input type="number" required class="" placeholder="Number 2" id="nb2Add" >');
$CardAddition->addElement('<input type="submit" class="button primary" id="btnMakeAdd" value="Make an addition" >');
$CardAddition->addElement('</form>');

// Converion min to sec
$CardMinToSec = new Card("Min to Sec");
$CardMinToSec->addElement('<form method="post" id="formMinToSec" class="card-form">');
$CardMinToSec->addElement('<input type="number" placeholder="Minutes" min="0" id="nbMinToSec">');
$CardMinToSec->addElement('<input type="submit" class="button primary" id="btnMinToSec" value="Convert min to sec" >');
$CardMinToSec->addElement("</form>")
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
    <?php include "../components/navbar_.php" ?>

    <div class="bodyContainer">
        <?php echo $CardAddition->render() ?>
        <?php echo $CardMinToSec->render() ?>
    </div>

    <script src="../scripts/exercices_js/minToSec.js"></script>
    <script src="../scripts/exercices_js/addition.js"></script>
    <script src="../scripts/exercices_js/loadFunction.js"></script>
</body>

</html>