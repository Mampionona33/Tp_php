<?php
require_once './utils/db.php';
require_once './utils/resetTxt.php';

function renderTable()
{
    $db = readDb();
    resetTxt();
    $delete_action = $_SERVER["PHP_SELF"];

    foreach ($db as $key => $value) {
        $line = explode(";", $value);
        $name = $line[0];
        $lastName = $line[1];
?>
        <tr>
            <td>
                <input type="checkbox" name="delete_ids[]" value="<?= $key ?>">
            </td>
            <td><?= $name ?></td>
            <td><?= $lastName ?></td>
            <td>
                <div class="table_button" style="display: flex; gap: 0.5rem; margin: 0 0.2rem">
                    <form action="<?= $delete_action ?>" method="post" style="display: flex; flex-direction: row">
                        <input type="hidden" name="delete_id" value="<?= $key ?>">
                        <input type="submit" class="button danger" value="Delete" data-value="<?= $name, " ", $lastName ?>" onclick="return confirmDelete(this);">
                    </form>

                    <form action="pages/detail.php" method="get">
                        <input type="hidden" name="id" value="<?= $key ?>">
                        <input type="submit" class="button primary" value="Details">
                    </form>
                </div>
            </td>
        </tr>

<?php
    }
}
?>