<div class="taches-admin">
            <div class="avatar">
                <div class="admin-profile">
                <?php if(isset($_SESSION[KEY_USER_CONNECT]['avatar']) && $_SESSION[KEY_USER_CONNECT]['avatar']!=''): ?>
                <img src="<?=$_SESSION[KEY_USER_CONNECT]['avatar'] ?>" alt="<?=$_SESSION[KEY_USER_CONNECT]["prenom"]."".$_SESSION[KEY_USER_CONNECT]["nom"]?>" id="profil">
                <img src="<?=WEB_ROOT."uploads".DIRECTORY_SEPARATOR."dark-2.jpg"?>" alt="<?=$_SESSION[KEY_USER_CONNECT]["prenom"]."".$_SESSION[KEY_USER_CONNECT]["nom"]?>" id="profil">
                <?php endif ?>
            </div>
                <div class="admin-name">
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["prenom"]?></h2><br>
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["nom"]?></h2>               
                </div>                
            </div>
            <div class="taches">
                <div class="liste-question">
                    <a href="#"><li class="m-link">Liste Questions</li></a>
                    <div class="img1"></div>
                </div>
                <div class="creer-admin">
                <a href="#"><li class="m-link">Creer un admin</li></a>
                    <div class="img2"></div>
                </div>
                <div class="liste-joueurs">
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueurs"?>" id="a_list_joueurs"><li class="m-link iiiiiiiii" for="img3">Liste Joueurs</li></a>
                    <div class="img3"></div>
                </div>
                <div class="creer-questions">
                <a href="#"><li class="m-link">Creer une question</li></a>
                    <div class="img4"></div>
                </div>        
            </div>
        </div>    
        