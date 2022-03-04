<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
?>

<link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "connexion.style.css" ?>" media="screen" type="text/css">

    <div class="main">
        <div class="form-contain">
            <div class="header-form">
                <h2>Login form</h2>
                <span>x</span>
            </div>
            <form action="<?= WEB_ROOT?>" id="form" method="POST">
                <input type="hidden" name="action" value="connexion">
                <input type="hidden" name="controller" value="securite">
                <?php if (isset($errors['connexion'])):?>
                <p class="errors"><?=$errors['connexion']?></p>
                <?php endif?>
                <div class="connect-params">
                <div class="form-control error">    
                    <div class="login">
                        <input type="text" name="login" placeholder="Login" id="login">
                        <?php if (isset($errors['login'])) : ?>
                            <p class="error"><?= $errors['login'] ?></p>
                        <?php endif ?>
                        <img src="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "ic-login.png" ?>" alt="" width="5%" height="1%">
                    </div>
                    <small id="error-login"></small>
                </div>    
                </div>
                <div class="form-control error">
                <div class="password">
                    <input type="password" name="password" placeholder="Password" id="password">
                    <?php if (isset($errors['password'])) : ?>
                        <p class="error"><?= $errors['password'] ?></p>
                    <?php endif ?>

                    <img src="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "ic-password.png" ?>" alt="" width="5%" height="1%">
                </div>
                <small id="error-password"></small>
            </div>
            <div class="connect_sign-in">
        <input type="submit" value="Connexion" id="connexion" name="btnconnexion">
        </form>
        <a href="<?=WEB_ROOT."?controller=securite&action=inscription"?>" id="inscription">S'inscrire pour jouer</a>
    </div>  
    </div>
        
        <?php
        require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.inc.html.php");
        ?>