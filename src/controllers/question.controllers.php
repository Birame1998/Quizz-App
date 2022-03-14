<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "question") {
            // echo "la requete venant du formulaire de question";
            extract($_POST);
            enregistrer_question_type_multiple($checkbox_);
            die;
            // $intetule_question=$_POST['intetule_question'];
            // $nombre_points=$_POST['nombre_points'];
            // $selecteur=$_POST['selecteur'];
            // $question_type_text=$_POST['question_type_text'];
            // $question_type_radio=$_POST['question_type_radio'];
            // $input_multiple_text = $_POST['input_multiple_text'];
            //
            // enregistrer_question_simple($question_type_radio_, $text_question_simple_);
            /* L'APPEL DE CHAQUE QUESTION VA SE FAIRE SELON LES VALEURS DU SELECT    */
            switch ($selecteur) {
                case $multiple:
                    // enregistrer_question_type_multiple();
                    break;
                case $simple:
                    // enregistrer_question_simple();
                    break;
                case $text:
            enregistrer_question_text($intetule_question, $nombre_points, $reponse_type_text);
                    break;
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
}
function enregistrer_question_type_multiple($checkbox)
{
    foreach ($checkbox as $key => $value) {
        var_dump($key);
    }
}

function enregistrer_question_text($intetule_question, $nombre_points, $reponse_type_text)
{
    $question_simple = [
        "intetule_question" => $intetule_question,
        "nombre_points" => $nombre_points,
        "reponse_type_text" => $reponse_type_text
    ];
    /* question type textt */
    save_data("questions", $question_simple);
}



function enregistrer_question_simple($question_type_radio, $text_question_simple)
{
    $toutes_les_reponse = [];
    foreach ($text_question_simple as $k => $reponse) {
        $toutes_les_reponse[] = $reponse;
        // var_dump($reponse);
    }
    foreach ($question_type_radio as $key => $value) {
        if ($key) {
            var_dump($key);die;
        }
        $indice_reponse_correct = $key;
    }
    $correct = $toutes_les_reponse[$indice_reponse_correct];
}
