const form_crq = document.getElementById("cr-question-form");
const nbre_de_points = document.querySelector("#cr-point");
const plus_ndp = document.querySelector(".plus-number");
const moins_ndp = document.querySelector(".moins-number");
const spanNumbers = document.querySelector(".error-number");
const spanQuestion = document.querySelector(".error-crq");
const questionArea = document.querySelector("#question");
const add_answer = document.querySelector(".cr-add-answerbtn");
const answer_contain = document.querySelector(".answer_contain");
const selectValue = document.getElementById("type-question");
<<<<<<< HEAD
let i = 1;
=======
const smallAnswer=document.querySelector(".cr-expique-consigne")
let i=1;
>>>>>>> f0fff01fab866c221f2dc6c0abac92b21b6e8284
//**********************************************************************//





  add_answer.addEventListener("click", function () {
    var cr_form_controller = document.createElement("div");
  cr_form_controller.className = "cr-form-controller";
  switch (selectValue.value) {
    case "text":
      var lab_reponse = document.createElement("label");
      lab_reponse.innerText = `La Reponse`;
      cr_form_controller.appendChild(lab_reponse);
      var input_text_reponse = document.createElement("input");
      input_text_reponse.type = "text";
      input_text_reponse.id = "cr-txt";
      input_text_reponse.name = "reponse_type_text";
      
      cr_form_controller.appendChild(input_text_reponse);
      var btn_delete_reponse = document.createElement("button");
      btn_delete_reponse.type = "button";
      btn_delete_reponse.className = "cr-delete-answerbtn";
      cr_form_controller.appendChild(btn_delete_reponse);
      answer_contain.appendChild(cr_form_controller);
      add_answer.disabled = true;

      break;
<<<<<<< HEAD
    case "simple":
      add_answer.disabled = false;
      var lab_reponse = document.createElement("label");
      lab_reponse.innerText = `Reponse ${i}`;
      cr_form_controller.appendChild(lab_reponse);
      var input_text_reponse = document.createElement("input");
      input_text_reponse.type = "text";
      input_text_reponse.id = "cr-txt";
      input_text_reponse.name = "text_question_simple []";

      cr_form_controller.appendChild(input_text_reponse);
      var input_radio_reponse = document.createElement("input");
      input_radio_reponse.type = "radio";
      input_radio_reponse.id = "cr-rad";
      input_radio_reponse.name = "question_type_radio []";

      cr_form_controller.appendChild(input_radio_reponse);
      var btn_delete_reponse = document.createElement("button");
      btn_delete_reponse.type = "button";
      btn_delete_reponse.className = "cr-delete-answerbtn";
      cr_form_controller.appendChild(btn_delete_reponse);
      answer_contain.appendChild(cr_form_controller);

      btn_delete_reponse.addEventListener("click", function () {
        btn_delete_reponse.parentNode.remove();
      });
      //recupérer les values de radio
      input_text_reponse.addEventListener("input", function () {
        input_radio_reponse.value = input_text_reponse.value;
      });

      break;
    case "multiple":
      var lab_reponse = document.createElement("label");
      lab_reponse.innerText = `Reponse ${i}`;
      cr_form_controller.appendChild(lab_reponse);
      var input_text_reponse = document.createElement("input");
      input_text_reponse.type = "text";
      input_text_reponse.id = "cr-txt";
      input_text_reponse.name = "input_multiple_text[]";

      cr_form_controller.appendChild(input_text_reponse);
      var input_check_reponse = document.createElement("input");
=======
      case "simple":
        var lab_reponse = document.createElement("label");
        lab_reponse.innerText = `Reponse ${i}`;
        lab_reponse.for=`Reponse ${i}`;
        lab_reponse.id=`Reponse ${i}`;
        cr_form_controller.appendChild(lab_reponse);
        var input_text_reponse = document.createElement("input");
        input_text_reponse.type = "text";
        input_text_reponse.id = "cr-txt";
        input_text_reponse.name = "text_question_simple []";
        
        cr_form_controller.appendChild(input_text_reponse);
        var input_radio_reponse = document.createElement("input");
        input_radio_reponse.type = "radio";
        input_radio_reponse.id = "cr-rad";
        input_radio_reponse.name = "question_type_radio []";
        
        cr_form_controller.appendChild(input_radio_reponse);
        var btn_delete_reponse = document.createElement("button");
        btn_delete_reponse.type = "button";
        btn_delete_reponse.className = "cr-delete-answerbtn";
        cr_form_controller.appendChild(btn_delete_reponse);
        answer_contain.appendChild(cr_form_controller);
        btn_delete_reponse.addEventListener("click", function () {
          btn_delete_reponse.parentNode.remove();
        });
        break;
        case "multiple":
          var lab_reponse = document.createElement("label");
          lab_reponse.innerText = `Reponse ${i}`;
          lab_reponse.for=`Reponse ${i}`;
          lab_reponse.id=`Reponse ${i}`;
          cr_form_controller.appendChild(lab_reponse);
          var input_text_reponse = document.createElement("input");
          input_text_reponse.type = "text";
          input_text_reponse.id = "cr-txt";
          input_text_reponse.name = "input_multiple_text[]";
          
          cr_form_controller.appendChild(input_text_reponse);
          var input_check_reponse = document.createElement("input");
>>>>>>> f0fff01fab866c221f2dc6c0abac92b21b6e8284
      input_check_reponse.id = "cr-check";
      input_check_reponse.type = "checkbox";
      input_check_reponse.name = "checkbox []";
      
      cr_form_controller.appendChild(input_check_reponse);
      var btn_delete_reponse = document.createElement("button");
      btn_delete_reponse.type = "button";
      btn_delete_reponse.className = "cr-delete-answerbtn";
      cr_form_controller.appendChild(btn_delete_reponse);
      answer_contain.appendChild(cr_form_controller);
      btn_delete_reponse.addEventListener("click", function () {
        btn_delete_reponse.parentNode.remove();
      });
      //recupérer les values de type checkboxe
      input_text_reponse.addEventListener("input", function () {
        input_check_reponse.value = input_text_reponse.value;
      });

      break;
    }
    i++;
    selectValue.addEventListener("change", function () {
      add_answer.disabled = false;
      answer_contain.innerHTML = "";
      i=1;
    });
    form_crq.addEventListener('submit',function(q) {
      if (answer_contain!==" ") {
        var errorAnswer=document.createElement('span');
        errorAnswer.className="erreur-reponse";
        cr_form_controller.appendChild(errorAnswer);
        if (ChampObligatoir(input_text_reponse)) {
          q.preventDefault();
          errorAnswer.innerText=`Veuillez remplir le champ de texte`;
        }else{

          if (input_radio_reponse.checked===false) {
            errorAnswer.innerText`Veuillez cocher la bonne reponse`;
          }
        }
      }
    })
    
  });

  
  /* array1.forEach(element => console.log(element)); */
  // function rebuid(){
    //   const reponse=document.querySelector('label');
    //   reponse.forEach((input, i)=>
//   {
//     input.value=i+1;
//   })
// }












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
  if (answer_contain.innerHTML===" ") {
    smallAnswer.innerText=`Veuillez faire votre choix de reponse`;
    q.preventDefault();
  }
  

});

<<<<<<< HEAD
/* array1.forEach(element => console.log(element)); */
function rebuild() {
  const reponse = document.querySelector("label"); //nom de tous labels en communs
  reponse.forEach((input, i) => {
    input.value = i + 1;
  });
=======
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


























// ************************************************************************************************************//
// À supprimer


function ChampObligatoir(input) {
  return input.value === "";
>>>>>>> f0fff01fab866c221f2dc6c0abac92b21b6e8284
}
