const promptSlected = () => {
  const delete_ids = mainTableForm.querySelectorAll(
    'input[name="delete_ids[]"]:checked'
  );
  if (delete_ids.length) {
    const out = [];
    for (let i = 0; i < delete_ids.length; i++) {
      const element = delete_ids[i];
      out.push(element.value);
    }
    alert(`ID of selected list: ${out}`);
  } else {
    alert("No item selected !!!");
  }
};
