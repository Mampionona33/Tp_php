const handleClickPreviewPdfList = () => {
  const navbarForm = document.getElementById("navbarForm");

  const search = document.getElementById("search");
  search.removeAttribute("name");

  navbarForm.setAttribute("method", "post");
  navbarForm.setAttribute("action", "./pages/pdf_list.php");

  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "preview_pdf");
  navbarForm.appendChild(hiddenInput);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const preview_pdf_list = document.getElementById("preview_pdf_list");
  preview_pdf_list &&
    preview_pdf_list.addEventListener("click", handleClickPreviewPdfList);
});
