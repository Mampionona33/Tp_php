const handleClickExerciceJs = () => {
  const navbarForm = document.getElementById("navbarForm");
  navbarForm.setAttribute("method", "post");
  const url = window.location;
  const path = `${url.protocol}//${url.hostname}:3000/pages/exercices_js.php`;
  navbarForm.setAttribute("action", path);
  console.log("exercice");
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const btnExerciceJs = document.getElementById("btnExerciceJs");
  btnExerciceJs &&
    btnExerciceJs.addEventListener("click", handleClickExerciceJs);
});
