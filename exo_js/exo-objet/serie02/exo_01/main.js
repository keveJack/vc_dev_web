function lanceCalculAdd() {
  const num1 = parseFloat(document.getElementById("num1").value);
  const num2 = parseFloat(document.getElementById("num2").value);

  const calculator = new Calcul(num1, num2);
  const result = calculator.add();

  document.getElementById(
    "result"
  ).innerText = `Résultat de l'addition : ${result}`;
}

function lanceCalculMult() {
  const num1 = parseFloat(document.getElementById("num1").value);
  const num2 = parseFloat(document.getElementById("num2").value);

  const calculator = new Calcul(num1, num2);
  const result = calculator.multiply();

  document.getElementById(
    "result"
  ).innerText = `Résultat de la multiplication : ${result}`;
}

document
  .getElementById("additionBtn")
  .addEventListener("click", lanceCalculAdd);
document
  .getElementById("multiplicationBtn")
  .addEventListener("click", lanceCalculMult);
