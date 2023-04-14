const handleClikbtnToHomePage = () => {
  //   const navbarForm = document.getElementById("navbarForm");

  window.location.href =
    window.location.origin +
    window.location.pathname.replace("/pages/exercices_js.php", "") +
    "/index.php";
};

window.addEventListener("load", function () {
  const btnToHomePage = document.getElementById("btnToHomePage");
  btnToHomePage &&
    btnToHomePage.addEventListener("click", handleClikbtnToHomePage);
});
