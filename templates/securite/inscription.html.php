<?php
if (isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
?>
<div class="main">    
    <div class="ins-contain">
        <div class="ins-text">
            <div class="ins-titles">
                <h1 class="ins-title1">S'INSCRIRE</h1>
                <h3 class="ins-title2">Pour tester votre niveau de culture générale</h3>
                <hr>
            </div>
            <div class="ins-settings">
                <form action="<?= WEB_ROOT ?>" method="POST" enctype="multipart/form-data" id="form-ins">
                    <input type="hidden" name="controller" value="securite">
                    <input type="hidden" name="action" value="inscription">
                    <div class="ins-form-controller">
                        <label for="prenom">Prenom</label><br>
                        <input type="text" name="prenom" id="prenom-ins" placeholder="Aaaa"><br>
                        <?php if (isset($errors['prenom'])) : ?>
                            <small class="error"><?= $errors['prenom'] ?></small>
                        <?php endif ?>
                        <small id="error-prenom-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="nom">Nom</label><br>
                        <input type="text" name="nom" id="nom-ins" placeholder="BBBB"><br>
                        <?php if (isset($errors['nom'])) : ?>
                            <small class="error"><?= $errors['nom'] ?></small>
                        <?php endif ?>
                        <small id="error-nom-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="login-ins">Login</label><br>
                        <input type="email" name="login" id="login-ins" placeholder="aaaaa@gmail.com"><br>
                        <?php if (isset($errors['login'])) : ?>
                            <small class="error"><?= $errors['login'] ?></small>
                        <?php endif ?>
                        <small id="error-login-ins"></small>
                    </div>
                    <div class="ins-form-controller">
                        <label for="password-ins">Password</label><br>
                        <input type="password" name="password" id="password-ins" placeholder="......."><br>
                        <small id="error-password-ins"></small>
                        <?php if (isset($errors['password'])) : ?>
                            <small class="error"><?= $errors['password'] ?></small>
                        <?php endif ?>
                    </div>
                    <div>
                    </div>
                    <div class="ins-form-controller">
                        <label for="password2-ins">Confirmer Password</label><br>
                        <input type="password" name="password2" id="password2-ins" placeholder="......."><br>
                        <?php if (isset($errors['password2'])) : ?>
                            <small class="error"><?= $errors['password2'] ?></small>
                        <?php endif ?>
                        <small id="error-password2-ins"></small>
                    </div>
                    <div class="submit">
                        <div class="choose-file">
                            <label for="avatar-ins" id="avatar-ins2" class="avatar-ins">Avatar</label>
                            <input type="file" name="avatar" id="avatar-ins" class="avatar-ins" value="Choisir un fichier">
                            <label for="avatar-ins" id="choose-file">
                                Choisir un fichier
                            </label>
                        </div>
                        <button id="creer-compte-ins">Creer compte</button>
                    </div>
                </form>
            </div>
            <a href="<?=WEB_ROOT?>" class="back-to-connection">Vous avez deja un compte ? Connectez vous ici</a>
        </div>
        <div class="ins-avatar">
                <!-- <img  class="ins-avatar-profile" src="<?=WEB_ROOT."uploads".DIRECTORY_SEPARATOR."1.jpg"?>" alt="photo de profil"> -->
        </div>
    </div>
</div>
</div>
<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.inc.html.php");
?>