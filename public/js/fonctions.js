function ChampObligatoir(input) {
    return input.value === "";
  }
  function showError(input, small, message) {
    const formC = input.parentElement;
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
  
  function checkEmail(input) {
    const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(input.value.trim().toLowerCase());
  }
  
  function checkLength(input, taille = 6) {
    return input.value.length >= taille;
  }
  function confirmPassword(input1,input2) {
      return input1.value===input2.value;
  }
function validPassword(input){
    return(containNumber(input)&& containLetter(input) && checkLength(input));
}









function activeBtn() {
  add_answer.disabled = false;
}
function supp_answer() {
 
}
function create_labe(lab,i) {
  let i=1
  var lab=document.createElement('label');
  lab.innerText='Reponse '+i;
  cr_form_controller.appendChild(lab_reponse);
  i++ 
}
function create_inputText() {
  input_text_reponse=document.createElement('input');
  input_text_reponse.type='text';
  input_text_reponse.id='cr-txt';
  cr_form_controller.appendChild(input_text_reponse);
}
function create_inputRadio() {
  var input_radio_reponse=document.createElement('input');
  input_radio_reponse.type='radio';
  input_radio_reponse.id='cr-rad';
  cr_form_controller.appendChild(input_radio_reponse);
}
function create_inputCheck() {
   var input_check_reponse=document.createElement('input');
   input_check_reponse.type='checkbox';
   input_check_reponse.id='cr-check';
   cr_form_controller.appendChild(input_check_reponse);
}
function create_btnDelete() {
  var btn_delete_reponse=document.createElement('button');  
  btn_delete_reponse.type='button';
  cr_form_controller.appendChild(btn_delete_reponse);

}
