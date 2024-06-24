var counterElement = document.getElementById("counter");
var quantityInput = document.getElementById("quantity");

function increase() {
  var currentValue = parseInt(counterElement.textContent);
  counterElement.textContent = currentValue + 1;
  quantityInput.value = currentValue + 1;
}

function decrease() {
  var currentValue = parseInt(counterElement.textContent);
  if (currentValue > 1) {
    counterElement.textContent = currentValue - 1;
    quantityInput.value = currentValue - 1;
  }
}

document.getElementById("increaseBtn").addEventListener("click", increase);
document.getElementById("decreaseBtn").addEventListener("click", decrease);
