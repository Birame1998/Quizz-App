<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
<link rel="stylesheet" href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."accueil.style.css" ?>">
  <div class="header-admin">
    <div class="big-title">
        <!-- <?php if (is_admin()): ?> -->
        <h1>CREER ET PARAMETRER VOS QUIZZ</h1>
        <!-- <?php endif ?> -->
        <!-- <?php if (is_joueur()): ?> -->
        <h1 class="bienvenue">BIENVENUE AU JEU</h1>    
        <!-- <?php endif ?> -->
    </div>    
    <div class="deconnexion"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>"><input type="submit" value="Deconnexion"></a></div>
  </div>
    <div class="main">
        <!-- <?php if (is_admin()): ?> -->
        <div class="taches-admin">
            <div class="avatar">
                <div class="admin-profile">

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
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueurs"?>"><label for="">Liste Joueurs</label></a>
                    <div class="img3"></div>
                </div>
                <div class="creer-questions">
                    <label for="">Creer Questions</label>
                    <div class="img4"></div>
                </div>        
            </div>
        </div>    
        <div class="contain-view">

        </div>
        <!-- <?php endif ?> -->
    </div>
    
        
        <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")?>