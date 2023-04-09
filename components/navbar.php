<div class="sticky " style="top:0">
    <div class="header" style="display: flex; gap:1rem">

        <input class="button danger" type="submit" id="delete_selected" name="delete_selected" value="Delete selected">
        <input class="button secondary" id="download_pdf" type="submit" value="Download PDF" name="download_pdf" onclick="this.form.action='pdf_list.php'">
        <input class="button secondary" id="preview_pdf" type="submit" value="Preview PDF" name="preview_pdf" onclick="this.form.action='pdf_list.php'">
        <input class="button primary" id="add_new" type="button" value="Add new">
        <input type="text" class="input" name="search" id="search" value="" placeholder="Find">
        <input type="button" class="button primary" value="Search" id="submit_search">
        <input type="button" class="button secondary" value="Clear filter" id="clearFilter" name="clearFilter">

    </div>
</div>