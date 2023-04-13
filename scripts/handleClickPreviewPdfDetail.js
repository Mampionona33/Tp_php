const handleClickPreviewPdfDetail = (params) => {
  const navbarForm = document.getElementById("navbarForm");

  const id = editButton.getAttribute("data-id");

  const hiddenInputId = document.createElement("input");
  hiddenInputId.setAttribute("type", "hidden");
  hiddenInputId.setAttribute("name", "id");
  hiddenInputId.setAttribute("value", id);

  navbarForm.appendChild(hiddenInputId);

  navbarForm.setAttribute("method", "get");
  navbarForm.setAttribute("action", "pdf_detail.php");

  const hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "preview_pdf");
  navbarForm.appendChild(hiddenInput);
  navbarForm.submit();
};

window.addEventListener("load", function () {
  const preview_pdf_detail = document.getElementById("preview_pdf_detail");
  preview_pdf_detail &&
    preview_pdf_detail.addEventListener("click", handleClickPreviewPdfDetail);
});
