<?php
extract($_GET);

if (isset($id)) {
  $fileName = "Line " . $id;
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
      a {
        border-radius: 5px;
        text-decoration: none;
        background-color : #D0D0D7;
        padding: 2px 5px;
        color: black;
        border: 1px solid grey;
        font-size: 0.8rem;
        font-family: sans-serif;
      }
      .box{
        display: flex;
        gap : 1rem;
      }
    </style>
  </head>
  <body>  
";