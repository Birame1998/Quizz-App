const form_crq = document.getElementById("cr-question-form");
const nbre_de_points = document.querySelector("#cr-point");
const plus_ndp = document.querySelector(".plus-number");
const moins_ndp = document.querySelector(".moins-number");
const spanNumbers = document.querySelector(".error-number");
const spanQuestion = document.querySelector(".error-crq");
const questionArea = document.querySelector("#question");

// ************************************************************************************************** //

form_crq.addEventListener("submit", function (q) {
  if (ChampObligatoir(nbre_de_points)) {
    q.preventDefault();
    spanNumbers.innerText = "Veuillez inscrire le nombre de points";
  } else {
    nbre = nbre_de_points.value;
    if (isNaN(nbre)) {
      q.preventDefault();
      spanNumbers.innerText = "Veuillez inscrire une valeur numérique";
    } else {
      if (nbre < 1) {
        q.preventDefault();
        spanNumbers.innerText =
          "Veuillez inscrire un entier superieur ou egal a 1";
      }
    }
    if (ChampObligatoir(questionArea)) {
      q.preventDefault();
      spanQuestion.innerText = "Veuillez écrire la question";
    }
  }
});

plus_ndp.addEventListener("click", function () {
  if (!isNaN(nbre_de_points.value) && nbre_de_points.value >= 1) {
    nbre_de_points.value++;
  }
});
moins_ndp.addEventListener("click", function () {
  if (!isNaN(nbre_de_points.value)) {
    if (nbre_de_points.value >= 2) {
      nbre_de_points.value--;
    }
  }
});