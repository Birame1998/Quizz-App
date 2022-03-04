<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
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
            if (is_connect()) {
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");          
            }
        }elseif($_GET['action']=="liste.joueurs"){
            lister_joueur();
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
        }
    }
}
function lister_joueur()
{
        $data=find_users(ROLE_JOUEUR);
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueurs.html.php");
}
function register():array
{
    $newUser=[
        'prenom'=>$_POST['prenom'],
        'nom' =>$_POST['nom'],
        'login'=>$_POST['login'],
        'password'=>$_POST['password'],
        'role'=>"ROLE_JOUEUR",
        'score'=>0
    ];
    return $newUser;
}