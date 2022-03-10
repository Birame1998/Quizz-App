    <div class="taches-admin">
            <div class="avatar">
                <div class="admin-profile">
                <?php if(isset($_SESSION[KEY_USER_CONNECT]['avatar']) && $_SESSION[KEY_USER_CONNECT]['avatar']!=''): ?>
                <img src="<?=WEB_ROOT."uploads".DIRECTORY_SEPARATOR.$_SESSION[KEY_USER_CONNECT]['avatar'] ?>" alt="<?=$_SESSION[KEY_USER_CONNECT]["prenom"]."".$_SESSION[KEY_USER_CONNECT]["nom"]?>" id="profil">
                <?php else:?>
                <img src="<?= WEB_ROOT."uploads".DIRECTORY_SEPARATOR."default-profile.jpg" ?>" id="profil">    
                <?php endif ?>
            </div>
                <div class="admin-name">
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["prenom"]?></h2><br>
                  <h2><?=$_SESSION[KEY_USER_CONNECT]["nom"]?></h2>               
                </div>                
            </div>
            <div class="taches">
                <div class="liste-question m-on-click">
                    <a href="#" class="acc-link"><li class="m-link">Liste Questions</li></a>
                    <div class="img1"></div>
                </div>
                <div class="creer-admin m-on-click">
                <a href="<?=WEB_ROOT."?controller=user&action=inscription"?>" class="acc-link"><li class="m-link">Creer un admin</li></a>
                    <div class="img2"></div>
                </div>
                <div class="liste-joueurs m-on-click">
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueurs"?>" id="a_list_joueurs" class="acc-link"><li class="m-link" for="img3">Liste Joueurs</li></a>
                    <div class="img3"></div>
                </div>
                <div class="creer-questions  m-on-click">
                <a href="<?=WEB_ROOT."?controller=user&action=creerquestion"?>" class="acc-link"><li class="m-link">Creer une question</li></a>
                    <div class="img4"></div>
                </div>        
            </div>
        </div>    
        