<?php

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  
    if (isset($_POST['action'])) {
        if ($_POST['action']=='connexion') {
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action']=="connexion") {
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        }
    }
    else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
}




function connexion(string $login,string $password)
{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"Veuillez entrer le login");
    if (count($errors)==0) {
        valid_email('login',$login,$errors,"Email invalide");
    }
    champ_obligatoire('password',$password,$errors,"Veuillez entrer le mot de passe");
    if (count($errors)==0) {
        $user=find_user_login_password($login,$password);
        if (count($user)!=0){
            $_SESSION[KEY_USER_CONNECT]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else {
            $errors['connexion']="login ou mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else {
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}