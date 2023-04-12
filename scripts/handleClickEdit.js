const editButton = document.getElementById("editButton");
const navbarForm = document.getElementById("navbarForm");

const handleClickEdit = () => {
  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "action");
  hiddenInput.setAttribute("value", "edit");

  navbarForm.appendChild(hiddenInput);

  const id = editButton.getAttribute("data-id");

  const hiddenInputId = document.createElement("input");
  hiddenInputId.setAttribute("type", "hidden");
  hiddenInputId.setAttribute("name", "id");
  hiddenInputId.setAttribute("value", id);

  navbarForm.appendChild(hiddenInputId);

  navbarForm.setAttribute("method", "get");
  navbarForm.setAttribute("action", "edit.php");
  navbarForm.submit();
};

window.addEventListener("load", function () {
  editButton && editButton.addEventListener("click", handleClickEdit);
});
