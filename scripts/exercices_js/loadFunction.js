window.addEventListener("load", () => {
  const btnMakeAdd = document.getElementById("btnMakeAdd");
  const formAdd = document.getElementById("formAdd");

  // Addition
  btnMakeAdd.addEventListener("click", (ev) => {
    ev.preventDefault();
    const nb1 = parseInt(document.getElementById("nb1Add").value);
    const nb2 = parseInt(document.getElementById("nb2Add").value);
    if (nb1 && nb2 && btnMakeAdd) {
      const output = addition(nb1, nb2);
      btnMakeAdd && btnMakeAdd.addEventListener("click", alert(output));
      formAdd.submit();
    }
  });

  // Min to second
  const btnMinToSec = document.getElementById("btnMinToSec");
  btnMinToSec.addEventListener("click", (ev) => {
    const formMinToSec = document.getElementById("formMinToSec");
    const nbMinToSec = document.getElementById("nbMinToSec").value;
    ev.preventDefault();
    if (nbMinToSec) {
      const output = minToSec(parseInt(nbMinToSec));
      alert(output);
      formMinToSec.submit();
    }
  });
});
