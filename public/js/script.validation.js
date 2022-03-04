const form = document.getElementById("form");

const inputLogin = document.getElementById("login");
const inputPassword = document.getElementById("password");

const smalllogin = document.getElementById("error-login");
const smallpassword = document.getElementById("error-password");
//réactiver les parametre du form pour envoyer les données...

function showError(input, small, message) {
  const formC = input.parentElement;
  formC.className = "form-control error";
  small.innerText = message;
}
function containNumber(p) {
  let test = false;
  let number = "0123456789";
  for (let i = 0; i < p.length; i++) {
    for (let j = 0; j < number.length; j++) {
      if (number[i] === p[j]) {
        test = true;
        break;
      }
    }
  }
  return test;
}
function containLetter(p) {
  let test = false;
  let minus = "abcdefghijklmnopqrstuvwxyz";
  let maz = minus.toUpperCase();
  let letter = minus.concat(maz);

  for (let j = 0; j < p.length; j++) {
    for (let i = 0; i < letter.length; i++) {
      if (letter[i] == p[j]) {
        test = true;
        break;
      }
    }
  }
  return test;
}
function ChampObligatoir(input) {
  return input.value === "";
}

function checkEmail(input) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(input.value.trim().toLowerCase());
}

function checkLength(input, taille = 6) {
  return input.value.length >= taille;
}

form.addEventListener("submit", function (e) {
  // e.preventDefault();
  if (ChampObligatoir(inputLogin)) {
    e.preventDefault();
    showError(inputLogin, smalllogin, "le login est obligatoire");
  }else{
    if (! checkEmail(inputLogin)) {
      e.preventDefault();
      showError(inputLogin,smalllogin,"le login doit etre un email");
    }

  }



  if (ChampObligatoir(inputPassword)) {
    e.preventDefault();
    showError(
      inputPassword,
      smallpassword,
      "le mot de passe est requis pour la connexion"
    );
  }else{
    if (!containNumber(inputPassword.value)) {
      e.preventDefault();
      showError(inputPassword, smallpassword,"le mot de passe doit contenir au moins un nombre")
    }

    if (!containLetter(inputPassword.value)) {
      e.preventDefault();
      showError(inputPassword, smallpassword,"le mot de passe doit contenir au moins une lettre")
    }
    if (!checkLength(inputPassword)) {
      e.preventDefault();
      showError(
        inputPassword,
        smallpassword,
        "le mot de passe doit contenir au moins 6 caracteres"
      );
    }
  }

});
