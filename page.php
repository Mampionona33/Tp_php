<?php
$data = ["rakoto", "randria", "ranaivo", "lendrema"];
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="button" value="Delete seleced" onclick="handeClickDelete()">
    </form>

    <form action="" id="tableForm">
        <table>
            <th>
                <tr>
                    <td>
                        <input type="checkbox" name="mainCheckbox" id="mainCheckbox" onchange="checkAll(this)">
                    </td>
                    <td>Name</td>
                </tr>
            </th>
            <tbody>
                <?php foreach ($data as $key => $value) { ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="selecedId[]" value="<?php print $key ?>" id="">
                        </td>
                        <td>
                            <?php print $value ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <script>
        const checkAll = (checkbox) => {
            const checkboxes = document.getElementsByTagName("input");
            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == "checkbox") {
                    checkboxes[i].checked = checkbox.checked;
                }
            }
        }

        const handeClickDelete = () => {
            const tableForm = document.getElementById("tableForm");
            const deleteIds = tableForm.querySelectorAll('input[name="selecedId[]"]:checked');
            if (deleteIds.length > 0) {
                tableForm.setAttribute("method", "get");
                tableForm.setAttribute("action", "page.php")
            }
            tableForm.submit();
        }
    </script>

</body>

</html>