const display = document.getElementById("display");
const pawButton = document.getElementById("paw-button");

function appendToDisplay(input) {
  display.value += input;
}
function clearDisplay() {
  display.value = "";
}
function calculate() {
  try {
    display.value = eval(display.value);
  }
   catch (error) {
    display.value = "Error";
  }
}
pawButton.addEventListener("click", () => {
    display.value = "meow";
  });