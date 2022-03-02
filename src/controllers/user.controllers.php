<?php
// require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action']=="accueil") {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET['action'])) {
        if (!is_connect()) {
            header("location:".WEB_ROOT);
            exit();
        }
        if ($_GET['action']=="accueil") {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
    }
}