<?php

function champ_obligatoire(string $key,string $data,array $error,string $message="Ce champ est obligatoire")
{
    if (empty($data)) {
        $error[$key]=$message;
    }
}
function valid_email(string $key,string $data,array $error,string $message="Email invalide")
{
    if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
        $error[$key]=$message;
    }
}

function valid_password(string $key,string $data,array $error,string $message="Mot de passe invalide")
{
    if (!preg_match('^(?.=*[A-Z])(?.=*[a-z])(?.=*[0-9] {6,})$',$_POST[$key])){
        $error[$key]=$message;
    }
}