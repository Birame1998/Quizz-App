<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
<link rel="stylesheet" href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."accueil.style.css" ?>">
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
    <div class="main">
        <?php if (is_admin()): ?>
            <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."menu.admin.inc.html.php")?>
        <?php endif ?>
        <div class="contain-view">
            <h2 class="listedesjoueurs">Liste des joueurs par score</h2>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Score</th>
                </tr>
                <?php foreach($data as $value):?>
                <tr>
                    <td><?= $value['nom'] ?></td>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['score'] ?></td>
                </tr>
                <?php endforeach ?>
            </table>
            <button>Suivant</button>

        </div>
    </div>
    
        
        <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")?>