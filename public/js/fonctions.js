function ChampObligatoir(input) {
    return input.value === "";
  }
  function showError(input, small, message,e) {
    const formC = input.parentElement;
    formC.className = "form-control "+e;
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
  