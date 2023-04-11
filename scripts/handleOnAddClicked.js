(() => {
  const form = document.getElementById("navbarForm");
  const searchInput = form.querySelector("#search");
  const add_new = form.querySelector("#add_new");

  add_new.addEventListener("click", (event) => {
    event.preventDefault();
    form.action = "./pages/add.php";
    form.method = "get";
    const params = new URLSearchParams({ action: "create" });
    form.action = `${form.action}?${params.toString()}`;
    form.submit();
  });
})();
