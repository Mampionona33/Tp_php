// const navbarForm = document.getElementById("navbarForm");

const handleDownloadPdfDetail = () => {
  navbarForm.setAttribute("method", "get");
  navbarForm.setAttribute("action", "pdf_detail.php");

  const id = editButton.getAttribute("data-id");

  const hiddenInputId = document.createElement("input");
  hiddenInputId.setAttribute("type", "hidden");
  hiddenInputId.setAttribute("name", "id");
  hiddenInputId.setAttribute("value", id);

  navbarForm.appendChild(hiddenInputId);

  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "download_pdf");
  navbarForm.appendChild(hiddenInput);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const download_pdf_detail = document.getElementById("download_pdf_detail");
  download_pdf_detail &&
    download_pdf_detail.addEventListener("click", handleDownloadPdfDetail);
});
