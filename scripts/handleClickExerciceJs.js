const handleClickExerciceJs = () => {
  const navbarForm = document.getElementById("navbarForm");
  navbarForm.setAttribute("method", "post");
  navbarForm.setAttribute("action", "pages/exercices_js.php");
  console.log("exercice");
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const btnExerciceJs = document.getElementById("btnExerciceJs");
  btnExerciceJs &&
    btnExerciceJs.addEventListener("click", handleClickExerciceJs);
});
