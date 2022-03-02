<?php
// require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="accueil") {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="accueil") {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
    }
}