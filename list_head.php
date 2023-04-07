<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
   
        .alert{
            margin: auto;
            display: flex;
            justify-content: center;
            padding: 2rem;
        }
        
        .alertChild{
            padding: 1rem;
            border-radius: 12px;            
        }

        tr:nth-child(odd) {
            background-color: rgba(224, 224, 224, 1);
        }

        .header {
            display: flex;
            padding: 1rem;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        table,
        th,
        td {
            border-collapse: collapse;
        }

        tr,
        td {
            padding: 0.2rem 1rem;
            align-items: center;
        }


        .table_button {
            display: flex;
            flex-wrap: nowrap;
        }



        td:nth-of-type(1) {
            text-align: center;
        }

        th {
            padding: 1rem;
            background-color: #000;
            color: #fff;
            font-size: larger;
        }

        .hidden {
            display: none;
        }

        .table_container_1 {
            display: flex;
            justify-content: center;
            margin: auto;
        }

        .table_container_2 {            
            margin: 2rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        .sticky {
            position: sticky;
            background-color: #fff;
            padding-top: 0.5rem
        }

        a {
            border-radius: 5px;
            text-decoration: none;
        }

        .button {
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 5px 8px;
            margin: 0.2rem;
            font-size: 1rem;
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

        .input{
            border-radius: 12px;
            height: 2rem;
            font-size: 1rem;
            border: 1px solid rgba(224, 224, 224, 1);
            padding: 0 0 0 0.5rem;
            transition: 0.1s;
            outline: none;
        }

        .input[type=text]:focus {
            border: 2px solid rgb(42 149 199 / 45%);
            box-shadow: rgba(42, 149, 199, 0.35) 0px 0px 5px;
        }
        
        .secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .info {
            background-color: #17a2b8;
            color: #fff;
        }
    </style>

</head>