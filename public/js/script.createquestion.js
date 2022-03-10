const add_answer=document.querySelector(".cr-add-answerbtn");
const answer_contain=document.querySelector(".answer_contain");

//**********************************************************************//

add_answer.addEventListener('click',function(){
let count=2    
var lab_reponse=document.createElement('label');
var input_text_reponse=document.createElement('input');
var input_check_reponse=document.createElement('input');
var input_radio_reponse=document.createElement('input');
var btn_delete_reponse=document.createElement('button');
var cr_form_controller=document.createElement('div');
cr_form_controller.className="cr-form-controller";
input_text_reponse.type='text';
input_check_reponse.type='checkbox';
input_radio_reponse.type='radio';
input_text_reponse.id='cr-txt';
input_check_reponse.id='cr-check';
input_radio_reponse.id='cr-rad';
btn_delete_reponse.type='button';
btn_delete_reponse.className='cr-delete-answerbtn';
lab_reponse.innerText='Reponse';
cr_form_controller.appendChild(lab_reponse);
cr_form_controller.appendChild(input_text_reponse);
cr_form_controller.appendChild(input_check_reponse);
cr_form_controller.appendChild(input_radio_reponse);
cr_form_controller.appendChild(btn_delete_reponse);
answer_contain.appendChild(cr_form_controller);
btn_delete_reponse.addEventListener('click',function() {
    btn_delete_reponse.parentNode.remove();
})

});