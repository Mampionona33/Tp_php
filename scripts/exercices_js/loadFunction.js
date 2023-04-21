window.addEventListener("load", () => {
  const btnMakeAdd = document.getElementById("btnMakeAdd");
  const formAdd = document.getElementById("formAdd");
  const dial_resp_add = document.getElementById("dial_resp_add");

  // Addition
  btnMakeAdd.addEventListener("click", (ev) => {
    ev.preventDefault();

    const nb1 = document.getElementById("nb1Add");
    const nb2 = document.getElementById("nb2Add");
    const respAdd = document.getElementById("respAdd");

    if (
      nb1 &&
      nb2 &&
      btnMakeAdd &&
      !isNaN(parseFloat(nb1.value)) &&
      !isNaN(parseFloat(nb2.value))
    ) {
      const output = addition(parseFloat(nb1.value), parseFloat(nb2.value));
      respAdd.innerText = output;
      dial_resp_add.setAttribute("class", "dialog");
      nb1.value = "";
      nb2.value = "";
      // formAdd.submit();
    }
  });

  // Reset addition
  formAdd.addEventListener("reset", (ev) => {
    dial_resp_add.setAttribute("class", "hidden");
  });

  // Min to second
  const btnMinToSec = document.getElementById("btnMinToSec");
  const formMinToSec = document.getElementById("formMinToSec");
  const dial_resp_min_to_sec = document.getElementById("dial_resp_min_to_sec");
  btnMinToSec.addEventListener("click", (ev) => {
    const nbMinToSec = document.getElementById("nbMinToSec");
    const nbMinToSecVal = nbMinToSec.value;
    const resp_min_to_sec = document.getElementById("resp_min_to_sec");

    ev.preventDefault();
    if (nbMinToSecVal) {
      const output = minToSec(parseInt(nbMinToSecVal));
      if (output >= 0) {
        resp_min_to_sec.innerText = output + " sec";
        dial_resp_min_to_sec.setAttribute("class", "dialog");
      } else {
        alert("The minutes must be greater or equal to zero.");
        nbMinToSec.value = ""; // Réinitialisation de la valeur
      }
    }
  });

  formMinToSec.addEventListener("reset", (ev) => {
    dial_resp_min_to_sec.setAttribute("class", "hidden");
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
  const dialogGetMax = document.getElementById("dialogGetMax");
  const classDialogGetMax = dialogGetMax.getAttribute("class");

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
        dialogGetMax.setAttribute("class", "dialog");
        console.log(classDialogGetMax);
      } else {
        listVal = nbCompareMaxVal;
        nbCompareMax.value = "";
        listComaredVal.innerText = listVal;
        dialogGetMax.setAttribute("class", "dialog");
        console.log(classDialogGetMax);
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
