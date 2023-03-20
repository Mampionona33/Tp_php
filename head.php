<?php

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
      table,th,td {
        border: 1px solid;
      }
      .sticky {
        position:sticky; 
        background-color: #fff; 
        padding-top: 0.5rem
      }
      a {
        border-radius: 5px;
        text-decoration: none;
      }
      .button{
        cursor:pointer;
        border:none;
        border-radius: 5px;
        padding: 5px 8px;
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
    </style>
  </head>
  <body>
  <table>
    <tr >
    <th >      
    <form action="" >
      <input type="checkbox" name="select" id=""> 
      <label for="select">Select</label>
    </form>
    </th>
    <th >Name</th>
    <th >Last Name</th>
    <th >Acions</th>
    </tr>
  ';