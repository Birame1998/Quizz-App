<div class="taches-admin">
            <div class="avatar">
                <div class="admin-profile">
                <img src="<?=WEB_ROOT."uploads".DIRECTORY_SEPARATOR."dark-2.jpg"?>" alt="<?=$_SESSION[KEY_USER_CONNECT]["prenom"]."".$_SESSION[KEY_USER_CONNECT]["nom"]?>" id="profil">
                </div>
                <div class="admin-name">
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["prenom"]?></h2><br>
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["nom"]?></h2>               
                </div>                
            </div>
            <div class="taches">
                <div class="liste-question">
                    <label for="">Liste Questions</label>
                    <div class="img1"></div>
                </div>
                <div class="creer-admin">
                    <label for="">Creer un admin</label>
                    <div class="img2"></div>
                </div>
                <div class="liste-joueurs">
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueurs"?>" id="a_list_joueurs"><label for="img3">Liste Joueurs</label></a>
                    <div class="img3"></div>
                </div>
                <div class="creer-questions">
                    <label for="">Creer Questions</label>
                    <div class="img4"></div>
                </div>        
            </div>
        </div>    
        