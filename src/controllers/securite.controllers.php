<?php

require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'connexion') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login, $password);
            //inscription
        } elseif (isset($_POST['action']) == 'inscription') {
            extract($_POST);
            register($prenom,$nom,$login,$password,$password2);
        }
    }
}

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
    if (count($errors) == 0) {
        valid_email('login', $login, $errors, "Email invalide");
    }
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
    $errors = [];
    champ_obligatoire('prenom', $prenom, $errors, "Veuillez entrer votre prenom");
    champ_obligatoire('nom', $nom, $errors, "Veuillez entrer votre nom");
    champ_obligatoire('login', $login, $errors, "Veuillez entrer le login");
    if (count($errors) == 0) {
        valid_email('login', $login, $errors, "Email invalide");
    }
    champ_obligatoire('password', $password, $errors, "Veuillez entrer votre nom");
    if (count($errors) == 0) {
        valid_password('password', $password, $errors, "password not supported");
    }
    
    if (!confirm_password($password, $password2)) {
        echo "les deux mot de pass doivent etre identiques";
        // valid_password('password2', $password, $errors, "les deux mot de pass doivent etre identiques");
    }
    if (count($errors) == 0) {
        // var_dump("jusque la"); die;
        $newUser = [
            'prenom' => $prenom,
            'nom' => $nom,
            'login' => $login,
            'password' => $password,
            'role' => "ROLE_JOUEUR",
            'score' => 0
        ];
        // var_dump($newUser);die();
        save_data("users",$newUser);
        connexion($login,$password);
        die();
    }
}