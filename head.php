<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 1</title>
  <style>
    table,
    th,
    td {
      border: 1px solid;
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

    .info {
      background-color: #17a2b8;
      color: #fff;
    }
  </style>
  <script>
    function checkAll(checkbox) {
      var checkboxes = document.getElementsByTagName('input');
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].type == "checkbox") {
          checkboxes[i].checked = checkbox.checked;
        }
      }
    }
  </script>
</head>

<body>
  <form action="page1.php" method="post">
  <table>
    <thead>
      <tr>
        <th>
          <form action="">
            <input type="checkbox" name="select" onchange="checkAll(this)">
            <label for="select">Select</label>
          </form>
        </th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Acions</th>
      </tr>
    </thead>