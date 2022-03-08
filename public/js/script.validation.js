// const form = document.getElementById("form");

const inputLogin = document.getElementById("login");
const inputPassword = document.getElementById("password");

const smalllogin = document.getElementById("error-login");
const smallpassword = document.getElementById("error-password");
//réactiver les parametre du form pour envoyer les données...


form.addEventListener("submit", function (e) {
  // e.preventDefault();
  if (ChampObligatoir(inputLogin)) {
    e.preventDefault();
    showError(inputLogin, smalllogin, "le login est obligatoire","conn-error");
  }else{
    if (! checkEmail(inputLogin)) {
      e.preventDefault();
      showError(inputLogin,smalllogin,"le login doit etre un email","conn-error");
    }

  }



  if (ChampObligatoir(inputPassword)) {
    e.preventDefault();
    showError(inputPassword,smallpassword,"le mot de passe est requis pour la connexion","conn-error");
  }else{
    if (!containNumber(inputPassword.value)) {
      e.preventDefault();
      showError(inputPassword, smallpassword,"le mot de passe doit contenir au moins un nombre","conn-error")
    }

    if (!containLetter(inputPassword.value)) {
      e.preventDefault();
      showError(inputPassword, smallpassword,"le mot de passe doit contenir au moins une lettre","conn-error")
    }
    if (!checkLength(inputPassword)) {
      e.preventDefault();
      showError(inputPassword,smallpassword,"le mot de passe doit contenir au moins 6 caracteres","conn-error");
    }
  }

});
