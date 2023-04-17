<?php
require_once "../components/Card.php";


// Card Additon
$CardAddition = new Card("Addition");
$CardAddition->addElement('<div class="dialog hidden" id="dial_resp_add" >');
$CardAddition->addElement('<p class="info" id="respAdd" ></p>');
$CardAddition->addElement('</div>');
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
$CardMinToSec->addElement("</form>");

// Icrementation
$CardIncrement = new Card("Increment");
$CardIncrement->addElement('<form id="formIncrement" method="post" class="card-form">');
$CardIncrement->addElement('<input type="number" id="nbToIncrement" placeholder="Number to increment">');
$CardIncrement->addElement('<input type="button" class="button primary" id="btnIncrement" value="Increment">');
$CardIncrement->addElement('</form>');


// Reverse text
$CardTxtReverse = new Card("Reverse Text");
$CardTxtReverse->addElement('<form id="formReversTxt" method="post" class="card-form">');
$CardTxtReverse->addElement('<input type="text" id="txtToReverse" placeholder="Text to reverse">');
$CardTxtReverse->addElement('<input type="button" class="button primary" id="btnReverse" value="Reverse">');
$CardTxtReverse->addElement('</form>');

// Get max
$CardGetMax = new Card("Get max");
$CardGetMax->addElement('<div id="dialogGetMax" class="dialog hidden" >');
$CardGetMax->addElement('<p class="info"  id="listComaredVal" ></p>');
$CardGetMax->addElement('</div>');
$CardGetMax->addElement('<form id="formGetMax" method="post" class="card-form">');
$CardGetMax->addElement('<div style="display:flex; gap:1rem" >');
$CardGetMax->addElement('<input type="number" id="nbCompareMax" placeholder="Add value to Compare">');
$CardGetMax->addElement('<input type="button" class="button primary" id="btnAddValToMax" value="+" >');
$CardGetMax->addElement('</div>');
$CardGetMax->addElement('<input type="button" class="button primary" id="btnGetMax" value="Get max">');
$CardGetMax->addElement('</form>');
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
        <?php echo $CardIncrement->render() ?>
        <?php echo $CardTxtReverse->render() ?>
        <?php echo $CardGetMax->render() ?>
    </div>

    <script src="../scripts/exercices_js/minToSec.js"></script>
    <script src="../scripts/exercices_js/addition.js"></script>
    <script src="../scripts/exercices_js/loadFunction.js"></script>
    <script src="../scripts/exercices_js/increment.js"></script>
    <script src="../scripts/exercices_js/strRevers.js"></script>
    <script src="../scripts/exercices_js/getMax.js"></script>
    <script src="../scripts/handleClikbtnToHomePage.js"></script>
</body>

</html>