<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "question") {
            // echo "la requete venant du formulaire de question";
            echo "<pre>";
            var_dump($_POST);
            echo "<pre>";

        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    

}