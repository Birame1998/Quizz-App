<div class="ins-text">
    <div class="ins-titles">
        <h1 class="ins-title1">S'INSCRIRE</h1>
        <?php if (is_connect()) : ?>
            <h3 class="ins-title2">Pour proposer des quizz</h3>
        <?php else : ?>
            <h3 class="ins-title2">Pour tester votre niveau de culture générale</h3>
        <?php endif ?>
        <hr>
    </div>
    <div class="ins-settings">
        <form action="<?= WEB_ROOT ?>" method="POST" enctype="multipart/form-data" id="form-ins">
            <input type="file" accept="image/*" name="avatar" id="avatar-ins" class="avatar-ins">
            <input type="hidden" name="role" value="<?= is_admin() ? "ROLE_ADMIN" : "ROLE_JOUEUR" ?>">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">
            <div class="ins-form-controller">
                <div class="lab-in">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom-ins" placeholder="Aaaa" class="sign-in-settings">
                </div>
                <?php if (isset($errors['prenom'])) : ?>
                    <small class="error"><?= $errors['prenom'] ?></small>
                <?php endif ?>
                <small id="error-prenom-ins" class="error-ins"></small>
            </div>
            <div class="ins-form-controller">
                <div class="lab-in">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom-ins" placeholder="BBBB" class="sign-in-settings">
                </div>
                <?php if (isset($errors['nom'])) : ?>
                    <small class="error"><?= $errors['nom'] ?></small>
                <?php endif ?>
                <small id="error-nom-ins" class="error-ins"></small>
            </div>
            <div class="ins-form-controller">
                <div class="lab-in">
                    <label for="login-ins">Login</label>
                    <input type="email" name="login" id="login-ins" placeholder="aaaaa@gmail.com" class="sign-in-settings">
                </div>
                <?php if (isset($errors['email-gmail'])) : ?>
                    <small class="error"><?= $errors['email-gmail'] ?></small>
                <?php endif ?>

                <?php if (isset($errors['login'])) : ?>
                    <small class="error"><?= $errors['login'] ?></small>
                <?php endif ?>
                <small id="error-login-ins" class="error-ins"></small>
            </div>
            <div class="ins-form-controller">
                <div class="lab-in">
                    <label for="password-ins">Password</label>
                    <input type="password" name="password" id="password-ins" placeholder="......." class="sign-in-settings">
                </div>
                <small id="error-password-ins" class="error-ins"></small>
                <?php if (isset($errors['password'])) : ?>
                    <small class="error"><?= $errors['password'] ?></small>
                <?php endif ?>
            </div>
            <div>
            </div>
            <div class="ins-form-controller">
                <div class="lab-in">
                    <label for="password2-ins">Confirmer Password</label>
                    <input type="password" name="password2" id="password2-ins" placeholder="......." class="sign-in-settings">
                </div>
                <?php if (isset($errors['password2'])) : ?>
                    <small class="error"><?= $errors['password2'] ?></small>
                <?php endif ?>
                <small id="error-password2-ins" class="error-ins"></small>
            </div>
            <div class="submit">
                <div class="choose-file">
                    <label for="avatar-ins" id="avatar-ins2" class="avatar-ins">Avatar</label>
                    <label for="avatar-ins" id="choose-file">
                        Choisir une image
                    </label>
                </div>
                <div class="create-account-ins"><button id="creer-compte-ins">Creer compte</button></div>
            </div>
        </form>
    </div>
    <?php if (!is_admin()) : ?>
        <a href="<?= WEB_ROOT ?>" class="back-to-connection">Vous avez deja un compte ? Connectez vous ici</a>
    <?php endif ?>
</div>
<div class="ins-avatar">
    <?php if (isset($errors['avatar'])) : ?>
        <small class="error"><?= $errors['avatar'] ?> </small>
    <?php endif ?>
    <label for="avatar-ins" class="lab-avatar-ins">
        <div draggable="true"><span>Cliquez ici pour choisir une image</span></div>
    </label>
    <!-- <img  class="ins-avatar-profile" src="<?= WEB_ROOT . "uploads" . DIRECTORY_SEPARATOR . "1.jpg" ?>" alt="photo de profil"> -->
</div>