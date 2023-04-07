<?php
extract($_GET);

if (isset($id)) {
  $fileName = "Line " . $id;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo "<title>$fileName</title>" ?> 
    <script>
      function confirmDelete() {
        return confirm('Do you really want to delete ?');
      }
    </script>
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
      .button{
        cursor:pointer;
        border:none;
        border-radius: 5px;
        padding: 5px 8px;
      }
      .button:hover{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      }
      .danger{
        background-color:red;
        color: #fff;
      }
      .primary{
        background-color:#007bff;
        color: #fff;
      }
      .info{
        background-color:#17a2b8;
        color: #fff;
      }
      .success{
        background-color:#28a745;
        color: #fff;
      }
      .secondary {
            background-color: #6c757d;
            color: #fff;
        }
      .box{
        display: flex;
        gap : 1rem;
      }
    </style>
  </head>
  <body>  
