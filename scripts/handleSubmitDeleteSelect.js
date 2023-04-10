function handleSubmitDeleteSelect() {
  const mainTableForm = document.getElementById("mainTableForm");
  const delete_id = mainTableForm.querySelectorAll('input[name="delete_id"]');
  for (let i = 0; i < delete_id.length; i++) {
    const element = delete_id[i];
    element.removeAttribute("name");
  }
  mainTableForm.setAttribute("method", "post");
  mainTableForm.setAttribute("action", ".");
  mainTableForm.submit();
}

window.addEventListener("load", function () {
  const delete_selected = document.getElementById("delete_selected");
  delete_selected.addEventListener("click", handleSubmitDeleteSelect);
});
