<?php
extract($_POST);

if (isset($key)) {
  $fileName = "Line " . $key;
}

echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>$fileName</title>
    <style>
      table,th,td {
        border: 1px solid;
      }
    </style>
  </head>
  <body>  
";