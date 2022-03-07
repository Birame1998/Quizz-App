<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // die("c'est bon !!!!!!!!!!!!! security controller");
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'connexion') {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            connexion($login, $password);
            //inscription
        } elseif (isset($_POST['action']) == 'inscription') {
            extract($_POST);
            register($prenom, $nom, $login, $password, $password2);
        }
    }
}
//ajouter la page de about

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "connexion") {
            require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php");
        } elseif ($_GET['action'] == "deconnexion") {
            logout();
        } elseif ($_GET['action'] == "inscription") {
            require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "inscription.html.php");
        }
    } else {
        require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php");
    }
}
function connexion(string $login, string $password)
{
    $errors = [];
    champ_obligatoire('login', $login, $errors, "Veuillez entrer le login");
    if (!isset($errors['login'])) {
        valid_email('login', $login, $errors);
    }
    // var_dump(($errors));die();
    champ_obligatoire('password', $password, $errors, "Veuillez entrer le mot de passe");
    if (count($errors) == 0) {
        $user = find_user_login_password($login, $password);
        if (count($user) != 0) {
            $_SESSION[KEY_USER_CONNECT] = $user;
            header("location:" . WEB_ROOT . "?controller=user&action=accueil");
            exit();
        } else {
            $errors['connexion'] = "login ou mot de passe incorrect";
            $_SESSION[KEY_ERRORS] = $errors;
            header("location:" . WEB_ROOT);
            exit();
        }
    } else {
        $_SESSION[KEY_ERRORS] = $errors;
        header("location:" . WEB_ROOT);
        exit();
    }
}

function logout()
{
    session_destroy();
    header("location:" . WEB_ROOT);
    exit();
}

function register($prenom, $nom, $login, $password, $password2, $avatar = null)
{
    /**traitememt de l'enregistrement de l'avatar */
    // echo '<pre>';
    // var_dump($_FILES['avatar']['error']);die;
    // echo '<pre>';
    $chemin='';
    if (isset($_FILES["avatar"]) && !empty($_FILES["avatar"])) {
        $file_name = $_FILES['avatar']['name'];
        // $file_name=> renommer le ficher pour le rendre unique
        $file_route = ROOT . "public" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR . $file_name;
        $ext = strrchr($file_name, '.');
        $file_to_save = $_FILES['avatar']['tmp_name'];
        $extention_autorier = ['.png', '.jpg', 'jpeg', 'gif'];
        if (in_array($ext, $extention_autorier)) {
            if (move_uploaded_file($file_to_save, $file_route)) {
                $chemin=$file_route;
                echo "fichier enregistré avec succés";
            }
        } else {
            die("choisseez une photo au bon format");
        }
    }


        /** traitement de sans l'avatar */
    $errors = [];
    champ_obligatoire('prenom', $prenom, $errors, "Veuillez entrer votre prenom");
    // die('sur la page de registration');
    champ_obligatoire('nom', $nom, $errors, "Veuillez entrer votre nom");
    champ_obligatoire('login', $login, $errors, "Veuillez entrer le login");
    champ_obligatoire('password', $password, $errors, "Veuillez entrer votre mot de passe pour s'inscrire");
    if (!isset($errors['login'])) {
        valid_email('login', $login, $errors, "veillez entrer un email valide");
    }
    if (!isset($errors['password'])) {
        valid_password('password', $password, $errors);
    }
    confirm_password($password, $password2, 'password2', $errors);
    login_existe($login, 'login', $errors);

    $password = password_hash($password, PASSWORD_DEFAULT);
    if (count($errors) == 0) {
        $newUser = [
            'prenom' => htmlspecialchars($prenom),
            'nom' => htmlspecialchars($nom),
            'login' => htmlspecialchars($login),
            'password' => htmlspecialchars($password),
            'role' => "ROLE_JOUEUR",
            'score' => 0,
             'avatar'=>$chemin
        ];
        save_data("users", $newUser);
        // connexion($login, $password);
        header("location:"."?controller=securite&action=connexion");
        exit();
    } else {
        $_SESSION[KEY_ERRORS] = $errors;
        header("location:" . "?controller=securite&action=inscription");
        exit();
    }
}
