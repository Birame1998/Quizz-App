<?php
require_once(ROOT . "config" . DIRECTORY_SEPARATOR . "orm.php");
function champ_obligatoire(string $key, string $data, array &$errors, string $message = "Ce champ est obligatoire")
{
    if (empty($data)) {
        $errors[$key] = $message;
    }
}
function valid_email(string $key, string $data, array &$errors, string $message = "Email invalide")
{
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        $errors[$key] = $message;
    }
}
function valid_emil_gmail(string $key, string $data, array &$errors, string $message = "Email doit etre un gmail")
{
    $ended=explode('@',$data);
    $ended=implode('',$ended);
    if (strcmp($ended,"@gmail.com")!=0) {
        $error[$key]=$message;
    }
}
function valid_password(string $key, string $data, array &$errors, string $message = "le mot de pass doit contenir au moins 6 caractere ayant des lettre et des chiifres")
{
    $monregex1 = '#[a-z]#';
    $monregex2 = '#[A-Z]#';
    $monregex3 = '#[0-9]#';
    if (!preg_match($monregex1, $data) || !preg_match($monregex2, $data) || !preg_match($monregex3, $data) || strlen($data)<6) {
        $errors[$key] = $message;
    }
}
function confirm_password($p1, $p2, $key, array &$errors, string $message = "les mot de pass ne sont pas identiques")
{
    if (!($p1 == $p2)) {
        $errors[$key] = $message;
    }
}
function login_existe($login, $key, array &$errors, string $message = "ce login est déjà pris veillez choisir un autre")
{
    $test = false;
    $users = find_data("users");
    foreach ($users as $user) {
        if ($user['login'] == $login) {
            $test = true;
            break;
        }
    }
    if ($test) {
        return $errors[$key] = $message;
    }
}
function image_valide(array &$error,$key,$message="choisseez une photo au bon format")
{
    $file_name = $_FILES['avatar']['name'];
    
}