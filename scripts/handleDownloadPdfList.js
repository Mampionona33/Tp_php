const handleDownloadPdfList = () => {
  const navbarForm = document.getElementById("navbarForm");

  const search = document.getElementById("search");
  search && search.removeAttribute("name");

  navbarForm.setAttribute("method", "post");
  navbarForm.setAttribute("action", "./pages/pdf_list.php");

  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "download_pdf");
  navbarForm.appendChild(hiddenInput);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const download_pdf_list = document.getElementById("download_pdf_list");
  download_pdf_list &&
    download_pdf_list.addEventListener("click", handleDownloadPdfList);
});
