const avatar_click=document.getElementsByClassName('avatar-ins');
const inputImage=document.getElementById('avatar-ins');
const placeImage=document.querySelector('.ins-avatar');
// **************************************************************************************************************************************//
inputImage.addEventListener('input',function() {
const img=document.createElement('img');
img.className="ins-avatar-profile";
img.alt="photo de profil";
img.src=URL.createObjectURL(inputImage.files[0]);
placeImage.appendChild(img);
});


// *********************************************************************************************************************************************************************//



const m_link=document.querySelector('#a_list_joueurs');
const img_ajout_liste=document.getElementsByClassName('img4');


m_link.addEventListener('click',function() {
    alert('ok');
    img_ajout_liste.style.backgroundImage=none;
})