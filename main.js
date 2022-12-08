const addForm = document.querySelector("#addChipForm");
const chipsList = document.querySelector("#chipsList");
const pinForm = document.querySelector("#pinForm");

const deleteChip = (chip) => {
  console.log(`delete ${chip}`);

  fetch(`/delete_chip.php?chip=${chip}`, {
    method: "DELETE",
  })
    .then((data) => data.json())
    .then((data) => {
      console.log(data);
      if (data.success) {
        alert("Deleted successfully!");
        updateChipsList();
      } else {
        alert("Error occurred while deleting!");
      }
    });
};

const updateChipsList = () => {
  chipsList.innerHTML = "";

  fetch("/get_chips.php")
    .then((data) => data.json())
    .then((chips) => {
      for (const chip of chips) {
        const li = document.createElement("li");
        const span = document.createElement("span");
        const deleteButton = document.createElement("button");

        deleteButton.innerText = "Delete";
        deleteButton.addEventListener("click", () => deleteChip(chip));

        span.innerHTML = `ID: ${chip}`;
        li.appendChild(span);
        li.appendChild(deleteButton);
        chipsList.appendChild(li);
      }
    });
};

addForm.addEventListener("submit", (e) => {
  e.preventDefault();

  if (addForm.checkValidity()) {
    const value = document.querySelector("#addChipInput").value;
    if (!value.length) return;

    fetch(`/add_chip.php?chip=${value}`)
      .then((data) => data.json())
      .then((data) => {
        if (data.success) {
          alert("Addition success!");
          updateChipsList();
        } else {
          alert("Addition failed!");
        }
      });
  }

  addForm.reset();
});

pinForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const prevPin = document.querySelector("#prevPinInput").value;

  if (pinForm.checkValidity() && prevPin.length) {
    let response = await fetch(`/pin_check.php?pin=${prevPin}`);
    response = await response.json();

    if (response.success) {
      const newPin = document.querySelector("#newPinInput").value;
      response = await fetch(`/set_pin.php?new_pin=${newPin}&prev_pin=${prevPin}`);
      response = await response.json();

      if (response.success) {
        alert("Pin was successfully changed!");
        pinForm.reset();
      } else {
        alert("Previous pin is not correct!");
      }
    } else {
      alert("Previous pin is not correct!");
    }
  }
});

updateChipsList();
