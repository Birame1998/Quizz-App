<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
<link rel="stylesheet" href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."accueil.style.css" ?>">
<div class="acc-contain-main">
   <div class="header-admin">
    <div class="big-title">
        <?php if (is_admin()): ?>
        <h1>CREER ET PARAMETRER VOS QUIZZ</h1>
        <?php endif ?>
        <?php if (is_joueur()): ?>
        <h1 class="bienvenue">BIENVENUE AU JEU <?=$_SESSION[KEY_USER_CONNECT]["prenom"]?>  <?=$_SESSION[KEY_USER_CONNECT]["nom"]?></h1>    
        <?php endif ?>
    </div>    
    <div class="deconnexion"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>"><input type="submit" value="Deconnexion"></a></div>
  </div>
    <div class="acc-main">
        <?php if (is_admin()): ?>
            <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."menu.admin.inc.html.php")?>
        <?php endif ?>
        <div class="contain-view">
         <?php
         if ($_GET['action']=="liste.joueurs") {
          echo $content_for_views;
         } 
         ?>
         <?php if ($_GET['action']!="accueil"):?>
         <div class="next-prev">
         <button class="previous acc-butt-prev-next">Precedent</button>
         <button class="next acc-butt-prev-next">Suivant</button>
         </div>
         </div>          

         <?php endif ?>
       </div> 
         
         
    </div>
    </div>    
        
        <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")?>