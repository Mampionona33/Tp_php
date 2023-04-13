<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} ?>

<div class="sticky ">
    <form id="navbarForm" action="" method="" class="navbar">
        <?php if (isset($page) && preg_match("/index/i", $page)) { ?>
            <div class="right">
                <input type="text" name="search" placeholder="Find" id="searchInput" class="input">
                <input type="submit" value="search" id="submit_search" class="button primary">
                <input type="button" value="Add new" id="add_new" class="button primary">
            </div>
            <div class="left">
                <input class="button secondary" id="download_pdf_list" type="button" value="Download PDF" name="download_pdf" onclick="this.form.action='pdf_list.php'">
                <input class="button secondary" id="preview_pdf_list" type="button" value="Preview PDF" name="preview_pdf" onclick="this.form.action='./pages/pdf_list.php'">
                <?php if (isset($page) && $page != "exercice") { ?>
                    <input type="button" value="Exercices" class="button primary">
            </div>
        <?php } ?>

    <?php } else if (isset($page) && preg_match("/detail/i", $page)) { ?>
        <div class="right">
            <input type="button" id="buttonList" value="List" class="button info">
            <input class="button primary" id="editButton" type="button" data-id="<?php echo $id ?>" value="Edit" name="action">
        </div>
        <div class="left">
            <input class="button secondary" type="button" data-id="<?php echo $id ?>" value="Download PDF" id="download_pdf_detail" name="download_pdf">
            <input class="button secondary" type="button" data-id="<?php echo $id ?>" value="Preview PDF" id="preview_pdf_detail" name="preview_pdf">
            <?php if (isset($page) && $page != "exercice") { ?>
                <input type="button" value="Exercices" class="button primary">
        </div>
    <?php } ?>

<?php } ?>
    </form>
</div>