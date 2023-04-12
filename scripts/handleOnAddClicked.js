const handleClickAdd = () => {
  const navbarForm = document.getElementById("navbarForm");

  const search = document.getElementById("search");
  search && search.removeAttribute("name");

  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "action");
  hiddenInput.setAttribute("value", "create");

  navbarForm.appendChild(hiddenInput);
  navbarForm.setAttribute("method", "get");
  navbarForm.setAttribute("action", "pages/add.php");
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const add_new = document.getElementById("add_new");
  add_new && add_new.addEventListener("click", handleClickAdd);
});
