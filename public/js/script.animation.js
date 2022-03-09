const avatar_click=document.getElementsByClassName('avatar-ins');
const inputImage=document.getElementById('avatar-ins');
const placeImage=document.querySelector('.ins-avatar');
const lab_avatar_ins=document.querySelector('.lab-avatar-ins');
// **************************************************************************************************************************************//
inputImage.addEventListener('input',function() {
const img=document.createElement('img');
// img.setAttribute('accept','image/*');
// img.accept="image/*";
img.accept="image/png";
img.className="ins-avatar-profile";
img.alt="photo de profil";
img.src=URL.createObjectURL(inputImage.files[0]);
if (img) {
    inputImage.addEventListener('input',function() {
        placeImage.innerHTML=" ";
        img.innerHTML=document.createElement('img');
        placeImage.appendChild(img);
        img.src=URL.createObjectURL(inputImage.files[0]);
    })
}
placeImage.appendChild(img);
lab_avatar_ins.style.display="none";
});

/*********************************************************************************************************************************************************************/

const m_link=document.querySelector('#a_list_joueurs');
const img_ajout_liste=document.getElementsByClassName('img4');


m_link.addEventListener('click',function() {
    img_ajout_liste.style.backgroundImage=none;
})