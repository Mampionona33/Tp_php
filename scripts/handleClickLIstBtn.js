const handleClickLIstBtn = () => {
  const navbarForm = document.getElementById("navbarForm");
  navbarForm.setAttribute("method", "post");
  navbarForm.setAttribute("action", "../index.php");
  console.log(navbarForm);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const buttonList = document.getElementById("buttonList");
  buttonList && buttonList.addEventListener("click", handleClickLIstBtn);
});
