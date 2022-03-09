const form_ins=document.getElementById('form-ins');
const inputPrenom_ins = document.getElementById("prenom-ins");
const inputNom_ins = document.getElementById("nom-ins");
const inputLogin_ins = document.getElementById("login-ins");
const inputPassword_ins = document.getElementById("password-ins");
const inputPassword2_ins = document.getElementById("password2-ins");
const smallprenom_ins = document.getElementById("error-prenom-ins");
const smallnom_ins = document.getElementById("error-nom-ins");
const smalllogin_ins = document.getElementById("error-login-ins");
const smallpassword_ins = document.getElementById("error-password-ins");
const smallpassword2_ins = document.getElementById("error-password2-ins");

// **************************************************************************************************************************************//




// **************************************************************************************************************************************//
form_ins.addEventListener ('submit',function(e){
    let count=0;
    if (ChampObligatoir(inputPrenom_ins)) {
        e.preventDefault();
        inputPrenom_ins.className="invalide";
        showError(inputPrenom_ins,smallprenom_ins,"Veuillez inscrire votre prenom pour vous inscrire");
    }else{
        inputPrenom_ins.className="valide";
    }
    if (ChampObligatoir(inputNom_ins)) {
        e.preventDefault();
        inputNom_ins.className="invalide";
        showError(inputNom_ins,smallnom_ins,"Veuillez inscrire votre nom pour vous inscrire");
    }else{
        inputNom_ins.className="valide";
    }
    if (ChampObligatoir(inputLogin_ins)) {
        e.preventDefault();
        inputLogin_ins.className="invalide";
        showError(inputLogin_ins,smalllogin_ins,"Un email est requis pour l'inscription");
    }else{
        if (!checkEmail(inputLogin_ins)) {
            e.preventDefault();
            inputLogin_ins.className="invalide";
            showError(inputLogin_ins,smalllogin_ins,"Veuillez entrer un email valide");
        }else{
            inputLogin_ins.className="valide";
        }
    }
    if (ChampObligatoir(inputPassword_ins)) {
        e.preventDefault();
        inputPassword_ins.className="invalide";
        showError(inputPassword_ins,smallpassword_ins,"Veuillez inscrire un mot de passe");
    }else{
        if (!containNumber(inputPassword_ins.value)) {
            e.preventDefault();
            inputPassword_ins.className="invalide";
            showError(inputPassword_ins, smallpassword_ins,"Le mot de passe doit contenir au moins un nombre");
            count++;
          }
      
          if (!containLetter(inputPassword_ins.value)) {
            e.preventDefault();
            inputPassword_ins.className="invalide";
            showError(inputPassword_ins, smallpassword_ins,"Le mot de passe doit contenir au moins une lettre");
            count++
          }
          if (!checkLength(inputPassword_ins)) {
            e.preventDefault();
            inputPassword_ins.className="invalide";
            showError(inputPassword_ins,smallpassword_ins,"Le mot de passe doit contenir au moins 6 caracteres");
            count;
          }
          if (count===0) {
            inputPassword_ins.className="valide";
          }
      
    }
    if (ChampObligatoir(inputPassword2_ins)) {
            if (!ChampObligatoir(inputPassword_ins)) {
                e.preventDefault();
                inputPassword2_ins.className="invalide";
                showError(inputPassword2_ins,smallpassword2_ins,"Veuillez confirmer votre mot de passe");
            }else{
                inputPassword2_ins.className="invalide";
            }
            
    }else{
        if (!ChampObligatoir(inputPassword_ins)) {
            if (!confirmPassword(inputPassword_ins,inputPassword2_ins)) {
                e.preventDefault();
                inputPassword2_ins.className="invalide";
                showError(inputPassword2_ins,smallpassword2_ins,"Veuillez inscrire un mot de passe identique");
            }else{
            inputPassword_ins.className="valide";
            inputPassword2_ins.className="valide";
        }
    }
}

})