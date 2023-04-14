window.addEventListener("load", () => {
  const btnMakeAdd = document.getElementById("btnMakeAdd");
  const formAdd = document.getElementById("formAdd");

  // Addition
  btnMakeAdd.addEventListener("click", (ev) => {
    ev.preventDefault();
    const nb1 = parseFloat(document.getElementById("nb1Add").value);
    const nb2 = parseFloat(document.getElementById("nb2Add").value);
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
    const nbMinToSec = document.getElementById("nbMinToSec");
    const nbMinToSecVal = nbMinToSec.value;
    ev.preventDefault();
    if (nbMinToSecVal) {
      const output = minToSec(parseInt(nbMinToSecVal));
      if (output >= 0) {
        alert(output + " Sec");
        formMinToSec.submit();
      } else {
        alert("The minutes must be greater or equal to zero.");
        nbMinToSec.value = ""; // Réinitialisation de la valeur
      }
    }
  });

  // Increment
  const btnIncrement = document.getElementById("btnIncrement");
  const formIncrement = document.getElementById("formIncrement");

  btnIncrement.addEventListener("click", (event) => {
    event.preventDefault();
    formIncrement.submit();
  });

  formIncrement.addEventListener("submit", (ev) => {
    ev.preventDefault();
    const nbToIncrement = document.getElementById("nbToIncrement");
    const nbToIncrementValue = parseInt(nbToIncrement.value);
    if (!isNaN(nbToIncrementValue)) {
      const result = increment(nbToIncrementValue);
      nbToIncrement.value = result; // Mettre à jour la valeur de l'input
      alert(result);
      formIncrement.submit();
    }
  });
});
