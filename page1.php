<?php

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Liste des nombres entiers entre 41 et 100 : </p>
';
for ($i = 41; $i <= 100; $i++) {
    if ($i % 2 && $i < 99) {
        echo $i . ' ;';
    }
};

echo '
</body>
</html>
';