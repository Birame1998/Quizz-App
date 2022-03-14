const add_answer = document.querySelector(".cr-add-answerbtn");
const answer_contain = document.querySelector(".answer_contain");
const selectValue = document.getElementById("type-question");
let i=1;
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
      break;
  }
  selectValue.addEventListener("change", function () {
    add_answer.disabled = false;
    answer_contain.innerHTML = "";
  });
  i++;
});

/* array1.forEach(element => console.log(element)); */
function rebuid(){
  const reponse=document.querySelector('label');
  reponse.forEach((input, i)=>
  {
    input.value=i+1;
  })
}