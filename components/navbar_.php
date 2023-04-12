<div class="sticky">
    <form id="navbarForm" action="" method="">
        <?php if (isset($page) && preg_match("/index/i", $page)) { ?>
            <input type="text" name="search" placeholder="Find" id="search" class="input w75">
            <input type="button" value="search" id="submit_search" class="button primary">
            <input type="button" value="Add new" id="add_new" class="button primary">
        <?php } ?>
    </form>
</div>