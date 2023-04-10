function handleSubmitDeleteSelect() {
  const mainTableForm = document.getElementById("mainTableForm");
  const delete_id = mainTableForm.querySelectorAll('input[name="delete_id"]');
  const delete_ids = mainTableForm.querySelectorAll(
    'input[name="delete_ids[]"]:checked'
  );
  if (delete_ids.length > 0) {
    if (
      confirm("Êtes-vous sûr de vouloir supprimer les éléments sélectionnés ?")
    ) {
      for (let i = 0; i < delete_id.length; i++) {
        const element = delete_id[i];
        element.removeAttribute("name");
      }
      mainTableForm.setAttribute("method", "post");
      mainTableForm.setAttribute("action", ".");
      mainTableForm.submit();
    }
  }
}

window.addEventListener("load", function () {
  const delete_selected = document.getElementById("delete_selected");
  delete_selected.addEventListener("click", handleSubmitDeleteSelect);
});
