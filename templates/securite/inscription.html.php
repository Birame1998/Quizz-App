<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
?>
<link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "inscription.style.css" ?>" media="screen" type="text/css">
<div class="main">
    <div class="ins-contain">
        <div class="ins-text">
            <div class="ins-titles">
                <h1 class="ins-title1">S'INSCRIRE</h1>
                <h3>Pour tester votre niveau de culture générale</h3>
                <hr>
            </div>
            <div class="ins-settings">
                <form action="<?= WEB_ROOT ?>" method="POST" enctype="multipart/form-data" id="form-ins">
                    <div class="ins-form-controller">
                        <label for="prenom">Prenom</label><br>
                        <input type="text" name="prenom" id="prenom-ins" placeholder="Aaaa"><br>
                        <small id="error-prenom-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="nom">Nom</label><br>
                        <input type="text" name="nom" id="nom-ins" placeholder="BBBB"><br>
                        <small id="error-nom-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="login-ins">Login</label><br>
                        <input type="text" name="login" id="login-ins" placeholder="aaaaa@gmail.com"><br>
                        <small id="error-login-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="password-ins">Password</label><br>
                        <input type="password" name="password" id="password-ins" placeholder="......."><br>
                        <small id="error-password-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="password2-ins">Confirmer Password</label><br>
                        <input type="password" name="password2" id="password2-ins" placeholder="......."><br>
                        <small id="error-password2-ins"></small>
                    </div>
                    <div class="submit">
                        <input type="file" name="avatar" id="avatar-ins" value="Choisir un fichier"><br>
                        <button id="creer-compte-ins">Creer compte</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="ins-avatar"></div>
    </div>
</div>
<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.inc.html.php");
?>