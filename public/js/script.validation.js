const form = document.getElementById("form");
const btnCon = document.getElementById("connexion");

const inputLogin = document.getElementById("login");
const inputPassword = document.getElementById("password");

const errorLogin = document.getElementById("erorr-login");
const errorPassword = document.getElementById("error-pwd");
//réactiver les parametre du form pour envoyer les données...

function showError(input, message) {
  const formC = input.parentElement;
  // formC.setAttribute('class','form-control error');
  formC.className = "form-control error";
  const small = document.querySelector("small");
  small.innerText = message;
}
function ChampObligatoir(input) {
  return input.value === "";
}

function checkEmail(input) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(input.value.trim().toLowerCase());
  //  showError(input,'login doit etre un email');
}

function checkLength(input, length) {
  return input.value == length;
}
form.addEventListener("submit", function (e) {
  e.preventDefault();
  if (ChampObligatoir(inputLogin)) {
    showError(inputLogin, "le login est obligatoire");
  }
  if (ChampObligatoir(inputPassword)) {
    showError(inputPassword, "le mot de pass est requi pour la connxion");
  }
  e.preventDefault();
  if (!checkEmail(inputLogin)) {
    showError(inputPassword, "le login doit etre un email");
  }
  if (!checkLength(inputPassword)) {
    showError(inputPassword, "le mot de pass doit");
  }

  if (
    !ChampObligatoir(inputLogin) &&
    !ChampObligatoir(inputPassword) &&
    checkEmail(inputLogin) && //le login c'est un e-mail
    checkLength(inputPassword) //la longueur est correct
  ) {
    e.target.submit();
  }
});
