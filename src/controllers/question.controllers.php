<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {

        if ($_POST['action'] == "question") {
<<<<<<< HEAD
            // echo "la requete venant du formulaire de question"; die;
            extract($_POST);
            switch ($selecteur) {
                case "multiple":
                    enregistrer_question_type_multiple($intetule_question,$nombre_points,$input_multiple_text,$checkbox_);
                    break;
                case "simple":
                    enregistrer_question_simple($question_type_radio_, $text_question_simple_, $intetule_question, $nombre_points);
                    break;
                case "text":
                    enregistrer_question_text($intetule_question, $nombre_points, $reponse_type_text);
                    break;
            }
=======
            // echo "la requete venant du formulaire de question";
            // extract($_POST);
            // enregistrer_question_type_multiple($checkbox_);
            
            // $intetule_question=$_POST['intetule_question'];
            // $nombre_points=$_POST['nombre_points'];
            // $selecteur=$_POST['selecteur'];
            // $question_type_text=$_POST['question_type_text'];
            // $question_type_radio=$_POST['question_type_radio'];
            // $input_multiple_text = $_POST['input_multiple_text'];
            //
            // enregistrer_question_simple($question_type_radio_, $text_question_simple_);
            /* L'APPEL DE CHAQUE QUESTION VA SE FAIRE SELON LES VALEURS DU SELECT    */
            // switch ($selecteur) {
            //     case $multiple:
            //         // enregistrer_question_type_multiple();
            //         break;
            //     case $simple:
            //         // enregistrer_question_simple();
            //         break;
            //     case $text:
            // // enregistrer_question_text($intetule_question, $nombre_points, $reponse_type_text);
            //         break;
            // }
>>>>>>> f0fff01fab866c221f2dc6c0abac92b21b6e8284
        }
    }
}
if (($_SERVER["REQUEST_METHOD"] == "GET")) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "creerquestion") {
            creer_question();
        }elseif ($_GET['action']=="liste.question"){
            lister_question();
        }
    }
}



function enregistrer_question_type_multiple($intetule_question,$nombre_points,$input_multiple_text,$checkbox)
{
    $totues_les_reponses=[];
    foreach ($input_multiple_text as $reponse) {
        $totues_les_reponses[]=$reponse;
    }
    $full_array=[
    "intetule_question" => $intetule_question,
    "nombre_points" => $nombre_points,
    "reponses"=>$totues_les_reponses,
    "correct"=>$checkbox
    ];
    save_data("questions",$full_array);
    $_SESSION['success-question']="question créé avec succes ...";
    header("location:" . "?controller=question&action=creerquestion");
    exit();
}
function enregistrer_question_simple($question_type_radio, $text_question_simple, $intetule_question, $nombre_points)
{
    $full_array = [];
    $toutes_les_reponse = [];
    foreach ($text_question_simple as $k => $reponse) {
        $toutes_les_reponse[] = $reponse;
    }
    $full_array = [
        "intetule_question" => $intetule_question,
        "nombre_points" => $nombre_points,
        "reponses" => $toutes_les_reponse,
        "correct" => $question_type_radio
    ];
    save_data("questions", $full_array);
    $_SESSION['success-question']="question créé avec succes ...";
    header("location:" . "?controller=question&action=creerquestion");
    exit();
}
function enregistrer_question_text($intetule_question, $nombre_points, $reponse_type_text)
{
    $question_type_text = [
        "intetule_question" => $intetule_question,
        "nombre_points" => $nombre_points,
        "reponses" => array($reponse_type_text),
        "correct" => array($reponse_type_text)
    ];
    save_data("questions", $question_type_text);
    $_SESSION['success-question']="question créé avec succes ...";
    header("location:" . "?controller=question&action=creerquestion");
    exit();
}
function creer_question()
{
    ob_start();
    require_once(PATH_VIEWS . "question" . DIRECTORY_SEPARATOR ."creer-question.html.php");
    $content_for_question = ob_get_clean();
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
}
function lister_question()
{
    ob_start();
    $toutes_les_questions=find_data("questions");
    require_once(PATH_VIEWS . "question" . DIRECTORY_SEPARATOR ."liste.question.html.php");
    $content_for_lister_queston = ob_get_clean();
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
}