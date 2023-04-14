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

  // Reverse text
  const btnReverse = document.getElementById("btnReverse");
  const formReversTxt = document.getElementById("formReversTxt");

  btnReverse.addEventListener("click", (ev) => {
    ev.preventDefault();
    formReversTxt.submit();
  });

  formReversTxt.addEventListener("submit", (ev) => {
    ev.preventDefault();
    const txtToReverse = document.getElementById("txtToReverse");
    const txt = txtToReverse.value;

    if (txt.length > 0) {
      alert(strRevers(txt));
      formReversTxt.submit();
    }
  });

  // Get max
  const btnAddValToMax = document.getElementById("btnAddValToMax");
  const nbCompareMax = document.getElementById("nbCompareMax");
  const formGetMax = document.getElementById("formGetMax");
  const btnGetMax = document.getElementById("btnGetMax");
  const listComaredVal = document.getElementById("listComaredVal");

  btnAddValToMax.addEventListener("click", (ev) => {
    ev.preventDefault();
    const nbCompareMaxVal = nbCompareMax.value;

    if (!isNaN(nbCompareMaxVal)) {
      let currentComparedVal = localStorage.getItem("comparedVal");
      let listVal = "";

      if (currentComparedVal !== null && nbCompareMaxVal) {
        listVal = currentComparedVal.concat(`,${nbCompareMaxVal}`);
        nbCompareMax.value = "";
        listComaredVal.innerText = listVal;
      } else {
        listVal = nbCompareMaxVal;
        nbCompareMax.value = "";
        listComaredVal.innerText = listVal;
      }

      localStorage.setItem("comparedVal", listVal);

      if (listVal) {
        const values = listVal.split(",");
        console.log(values);
      }
    }
  });

  btnGetMax.addEventListener("click", (ev) => {
    ev.preventDefault();
    const currentComparedVal = localStorage.getItem("comparedVal");

    if (currentComparedVal) {
      const values = currentComparedVal.split(",");
      console.log(values);
      alert(getMax(values));
      formGetMax.submit();
      localStorage.removeItem("comparedVal");
    } else {
      alert("No values to compare.");
    }
  });

  window.addEventListener("load", () => {
    console.log("test");
    const currentComparedVal = localStorage.getItem("comparedVal");
    if (currentComparedVal !== null) {
      console.log(currentComparedVal);
    } else {
      console.log(
        "La clé 'comparedVal' n'a pas été trouvée dans localStorage."
      );
    }
  });
});
