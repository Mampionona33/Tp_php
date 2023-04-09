function confirmDelete(button) {
  const value = button.dataset.value;
  return confirm(`Do you really want to delete ${value}?`);
}
