<div class="sticky" style="top:0">
    <div class="header" style="display: flex; gap: 1rem">


        <?php if (isset($page) && $page === 'index') {
        ?>
            <form action="" method="" id="formAdd">
                <input class="button danger" type="button" id="delete_selected" name="delete_selected" value="Delete selected">
                <input type="hidden" name="action" value="create">
                <input class="button primary" id="add_new" type="submit" value="Add new" onclick="this.form.action='pages/add.php'; this.form.method='get'">
            </form>
            <form action=<?php $_SERVER['PHP_SELF'] ?>>
                <input type="text" class="input" name="search" id="search" value="" placeholder="Find">
                <input type="submit" class="button primary" value="Search" id="submit_search">
                <!-- <input type="button" class="button secondary" value="Clear filter" id="clearFilter" name="clearFilter"> -->
            </form>
            <form action="" method="POST">
                <input class="button secondary" id="download_pdf" type="submit" value="Download PDF" name="download_pdf" onclick="this.form.action='pdf_list.php'">
                <input class="button secondary" id="preview_pdf" name="preview_pdf" type="submit" value="Preview PDF" name="preview_pdf" onclick="this.form.action='./pages/pdf_list.php'">
            </form>
        <?php }
        if (isset($page) && $page === 'detail') { ?>
            <?php

            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                // var_dump($id);
                // die();
            }
            ?>
            <form action="../index.php" method="post">
                <input type="submit" value="List">
            </form>
            <form action="">

                <input class="button primary" type="submit" value="Edit" name="action" onclick="this.form.method='GET'; this.form.action='edit.php' ">
                <?php if (isset($_GET["id"])) { ?>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <?php } ?>
            </form>

            <form action="pdf_detail.php" method="get">
                <input type="hidden" name="id" value=<?php echo $id ?>>
                <input class="button secondary" type="submit" value="Download PDF" name="download_pdf">
            </form>

            <form action="pdf_detail.php" method="get">
                <input type="hidden" name="id" value=<?php echo $id ?>>
                <input class="button secondary" type="submit" value="Preview PDF" name="preview_pdf">
            <?php } ?>

    </div>
</div>