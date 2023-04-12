<div class="sticky">
    <form id="navbarForm" action="" method="">
        <?php if (isset($page) && preg_match("/index/i", $page)) { ?>
            <input type="text" name="search" placeholder="Find" id="searchInput" class="input">
            <input type="button" value="search" id="submit_search" class="button primary">
            <input type="button" value="Add new" id="add_new" class="button primary">
            <input class="button secondary" id="download_pdf_list" type="button" value="Download PDF" name="download_pdf" onclick="this.form.action='pdf_list.php'">
            <input class="button secondary" id="preview_pdf_list" type="button" value="Preview PDF" name="preview_pdf" onclick="this.form.action='./pages/pdf_list.php'">
        <?php } ?>
    </form>
</div>