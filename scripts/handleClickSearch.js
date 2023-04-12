const handleClickSearch = () => {
  const navbarForm = document.getElementById("navbarForm");
  navbarForm.setAttribute("method", "get");
  navbarForm.setAttribute("action", ".");
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const submit_search = document.getElementById("submit_search");
  submit_search && submit_search.addEventListener("click", handleClickSearch);
});
