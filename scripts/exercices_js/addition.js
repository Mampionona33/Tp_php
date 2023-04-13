const addition = (nb1, nb2) => {
  alert(`${nb1} + ${nb2} = ${nb1 + nb2}`);
};

window.addEventListener("load", () => {
  const makeAdd = document.getElementById("makeAdd");
  const formAdd = document.getElementById("formAdd");
  makeAdd.addEventListener("click", (ev) => {
    ev.preventDefault();
    const nb1 = parseInt(document.getElementById("nb1").value);
    const nb2 = parseInt(document.getElementById("nb2").value);
    makeAdd && makeAdd.addEventListener("click", addition(nb1, nb2));
    formAdd.submit();
  });
});
