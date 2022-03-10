<?php

require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
?>
<div class="acc-contain-main">
  <div class="header-admin">
    <div class="big-title">
      <?php if (is_admin()) : ?>
        <h1>CREER ET PARAMETRER VOS QUIZZ</h1>
      <?php endif ?>
      <?php if (is_joueur()) : ?>
        <h1 class="bienvenue">BIENVENUE AU JEU <?= $_SESSION[KEY_USER_CONNECT]["prenom"] ?> <?= $_SESSION[KEY_USER_CONNECT]["nom"] ?></h1>
      <?php endif ?>
    </div>
    <div class="deconnexion"><a href="<?= WEB_ROOT . "?controller=securite&action=deconnexion" ?>"><input type="submit" value="Deconnexion" id="disconnect"></a></div>
  </div>
  <div class="acc-main">
    <?php if (is_admin()) : ?>
      <?php require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "menu.admin.inc.html.php") ?>
    <?php endif ?>
    <div class="contain-view">
      <?php
      if ($_GET['action'] == "liste.joueurs") {
        echo $content_for_views;
      } elseif ($_GET['action'] == "inscription") {
        echo $content_for_admin_sign_in;
      } elseif ($_GET['action'] == "creerquestion") {
        echo $content_for_question;
      }
      ?>
      <?php if ($_GET['action'] != "accueil") : ?>
        <?php if ($_GET['action'] == "liste.joueurs") : ?>
        <?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."next.prev.buttons.html.php") ?>  
    </div>
  <?php endif ?>
<?php endif ?>
  </div>


</div>
</div>

<?php require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.inc.html.php") ?>