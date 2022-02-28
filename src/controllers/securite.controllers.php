<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
            $login=$_POST['login'];
            $password=$_POST['password'];
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
            echo"charger la page de connexion";
        }
    }
    else{
        echo"charger la page de connexion";
    }
}