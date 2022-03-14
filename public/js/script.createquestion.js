const add_answer=document.querySelector(".cr-add-answerbtn");
const answer_contain=document.querySelector(".answer_contain");
const selectValue = document.getElementById("type-question");




//**********************************************************************//

// add_answer.addEventListener('click',function(){
// var lab_reponse=document.createElement('label');
// var input_text_reponse=document.createElement('input');
// var input_check_reponse=document.createElement('input');
// var input_radio_reponse=document.createElement('input');
// var btn_delete_reponse=document.createElement('button');
// var cr_form_controller=document.createElement('div');
// cr_form_controller.className="cr-form-controller";
// input_text_reponse.type='text';
// input_check_reponse.type='checkbox';
// input_radio_reponse.type='radio';
// input_text_reponse.id='cr-txt';
// input_check_reponse.id='cr-check';
// input_radio_reponse.id='cr-rad';
// btn_delete_reponse.type='button';
// btn_delete_reponse.className='cr-delete-answerbtn';
// lab_reponse.innerText='Reponse';
// cr_form_controller.appendChild(lab_reponse);
// cr_form_controller.appendChild(input_text_reponse);
// cr_form_controller.appendChild(input_check_reponse);
// cr_form_controller.appendChild(input_radio_reponse);
// cr_form_controller.appendChild(btn_delete_reponse);
// answer_contain.appendChild(cr_form_controller);
// btn_delete_reponse.addEventListener('click',function() {
//     btn_delete_reponse.parentNode.remove();
// })
// });


// add_answer.addEventListener('click',function() {
// var cr_form_controller=document.createElement('div');
// cr_form_controller.className="cr-form-controller";
// if (selectValue.value==="text") {
//     var lab_reponse=document.createElement('label');
//     lab_reponse.innerText='Reponse';
//     cr_form_controller.appendChild(lab_reponse);
//     answer_contain.appendChild(cr_form_controller);
//     input_text_reponse=document.createElement('input');
//     input_text_reponse.type='text';
//     input_text_reponse.id='cr-txt';
//     cr_form_controller.appendChild(input_text_reponse);
//     var btn_delete_reponse=document.createElement('button');
//     btn_delete_reponse.type='button';
//     btn_delete_reponse.className='cr-delete-answerbtn';
//     cr_form_controller.appendChild(btn_delete_reponse);
//     add_answer.disabled=true
// }else{

//     if (selectValue.value==="simple") {
//         add_answer.enabled=true;
//         alert('simple');
//     }else{

//         if (selectValue.value==="multiple") {
//             alert('multiple');
//         }
//     }
// }
// })

add_answer.addEventListener('click',function () {
    var cr_form_controller=document.createElement('div');
    cr_form_controller.className="cr-form-controller";
    switch (selectValue.value) {
        case "text":
            var lab_reponse=document.createElement('label');
            lab_reponse.innerText='Reponse';
            cr_form_controller.appendChild(lab_reponse);
            var input_text_reponse=document.createElement('input');
            input_text_reponse.type='text';
            input_text_reponse.id='cr-txt';
            cr_form_controller.appendChild(input_text_reponse);
            var btn_delete_reponse=document.createElement('button');
            btn_delete_reponse.type='button';
            btn_delete_reponse.className='cr-delete-answerbtn';
            cr_form_controller.appendChild(btn_delete_reponse);
            answer_contain.appendChild(cr_form_controller);
            add_answer.disabled=true;
            break;    
        case "simple":
            add_answer.disabled=false;
            var lab_reponse=document.createElement('label');
            lab_reponse.innerText='Reponse';
            cr_form_controller.appendChild(lab_reponse);
            var input_text_reponse=document.createElement('input');
            input_text_reponse.type='text';
            input_text_reponse.id='cr-txt';
            cr_form_controller.appendChild(input_text_reponse);
            var input_radio_reponse=document.createElement('input');
            input_radio_reponse.type='radio';
            input_radio_reponse.id='cr-rad';
            cr_form_controller.appendChild(input_radio_reponse);
            var btn_delete_reponse=document.createElement('button');
            btn_delete_reponse.type='button';
            btn_delete_reponse.className='cr-delete-answerbtn';
            cr_form_controller.appendChild(btn_delete_reponse);
            answer_contain.appendChild(cr_form_controller);
            btn_delete_reponse.addEventListener('click',function() {
                btn_delete_reponse.parentNode.remove();  
            })
            break;
        case "multiple":
            var lab_reponse=document.createElement('label');
            lab_reponse.innerText='Reponse';
            cr_form_controller.appendChild(lab_reponse);
            var input_text_reponse=document.createElement('input');
            input_text_reponse.type='text';
            input_text_reponse.id='cr-txt';
            cr_form_controller.appendChild(input_text_reponse);
            var input_check_reponse=document.createElement('input');
            input_check_reponse.id='cr-check';
            input_check_reponse.type='checkbox';
            cr_form_controller.appendChild(input_check_reponse);
            var btn_delete_reponse=document.createElement('button');
            btn_delete_reponse.type='button';
            btn_delete_reponse.className='cr-delete-answerbtn';
            cr_form_controller.appendChild(btn_delete_reponse);
            answer_contain.appendChild(cr_form_controller);
            btn_delete_reponse.addEventListener('click',function() {
                btn_delete_reponse.parentNode.remove();  
            })
            break;
            }
            selectValue.addEventListener('change',function() {
                add_answer.disabled=false;
                answer_contain.innerHTML="";
            })
            
        })
        
            

 
  


  