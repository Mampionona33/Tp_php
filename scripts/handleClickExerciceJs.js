const handleClickExerciceJs = () => {
  const navbarForm = document.getElementById("navbarForm");
  navbarForm.setAttribute("method", "post");
  const url = window.location;

  let path;
  if (url.pathname.includes("Tp_php")) {
    path = `${url.protocol}//${url.hostname}/Tp_php/pages/exercices_js.php`;
  } else {
    path = `${url.protocol}//${url.hostname}:3000/pages/exercices_js.php`;
  }

  navbarForm.setAttribute("action", path);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const btnExerciceJs = document.getElementById("btnExerciceJs");
  btnExerciceJs &&
    btnExerciceJs.addEventListener("click", handleClickExerciceJs);
});
