const categorySelect = document.getElementById("category");
  const newCategoryGroup = document.getElementById("newCategoryGroup");
  const newCategoryInput = document.getElementById("newCategoryInput");
  const saveCategoryBtn = document.getElementById("saveCategory");
  const cancelCategoryBtn = document.getElementById("cancelCategory");

  // Show input when "Add new" is chosen
  categorySelect.addEventListener("change", function() {
    if (this.value === "__add_new__") {
      newCategoryGroup.style.display = "table"; // show input group
      newCategoryInput.value = "";
      newCategoryInput.focus();
    }
  });

  // Save new category
  saveCategoryBtn.addEventListener("click", function() {
    const newCategory = newCategoryInput.value.trim();
    if (newCategory) {
      const option = document.createElement("option");
      option.value = newCategory;
      option.text = newCategory;

      // Insert before "Add new"
      const addNewOption = categorySelect.querySelector("option[value='__add_new__']");
      categorySelect.insertBefore(option, addNewOption);

      // Select the new one
      categorySelect.value = newCategory;
    } else {
      categorySelect.value = ""; // reset
    }
    newCategoryGroup.style.display = "none"; // hide input
  });

  // Cancel adding new category
  cancelCategoryBtn.addEventListener("click", function() {
    newCategoryGroup.style.display = "none";
    categorySelect.value = ""; // reset dropdown
  });