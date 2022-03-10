<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "accueil") {
            require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['action'])) {
        if (!is_connect()) {
            header("location:" . WEB_ROOT);
            exit();
        }
        if ($_GET['action'] == "accueil") {
            require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
        } elseif ($_GET['action'] == "liste.joueurs") {
            lister_joueur();
        } elseif ($_GET['action'] == "inscription") {
            creer_admin();
        } elseif ($_GET['action'] == "creerquestion") {
            creer_question();
        }
    }
}
function lister_joueur()
{
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    /** begin pagination */
    define("NOMBRE_JOUEUR_PAGE", 5);
    $nombre_de_joueurs = count($data);

    $nombre_page = ceil($nombre_de_joueurs / NOMBRE_JOUEUR_PAGE);
    if (isset($_GET['page'])) {
        $page_actuel = (int)$_GET['page'];
        if ($page_actuel>$nombre_page) {
            $page_actuel=$nombre_page;   
        }elseif($page_actuel<1) {
        $page_actuel = 1;
        }
    } else {
        $page_actuel = 1;
    }
    $indice_depart = ($page_actuel - 1) * NOMBRE_JOUEUR_PAGE;
    $indice_fin = $indice_depart + NOMBRE_JOUEUR_PAGE - 1;
    $t = [];
    for ($i = $indice_depart; $i <= $indice_fin; $i++) {
        if(isset($data[$i]))
        $t[] = $data[$i];
    }
    $data = $t;
    /** end pagination */
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "liste.joueurs.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
}
function creer_admin()
{
    ob_start();
    require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "ins-form.inc.html.php");
    $content_for_admin_sign_in = ob_get_clean();
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
}
function creer_question()
{
    ob_start();
    require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "creer-question.html.php");
    $content_for_question = ob_get_clean();
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
}