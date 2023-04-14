const handleClikbtnToHomePage = () => {
  window.location.href =
    window.location.origin +
    window.location.pathname.replace("/pages/exercices_js.php", "") +
    "/index.php";
  console.log("test");
};

window.addEventListener("load", function () {
  const btnToHomePage = document.getElementById("btnToHomePage");
  btnToHomePage &&
    btnToHomePage.addEventListener("click", handleClikbtnToHomePage);
});
