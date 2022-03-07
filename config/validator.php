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
function valid_password(string $key, string $data, array &$errors, string $message = "le mot de pass doit contenir au moins 6 caractere ayant des lettre et des chiifres")
{
    //   \w	tout caractère de "mot" "#[A-Za-z0-9_]#" plus les accentués
    // ("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    // $regex = '#^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9] {6,})#';
    //$lastpre=(!preg_match("/[a-zA-Z]/",$data) || !preg_match("/[0-9]/", $data) || $data < 6
    $monregex = '#[a-zA-Z0-9]{5,}.+#';
    if (!preg_match($monregex, $data) && strlen($data)<6) {
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
