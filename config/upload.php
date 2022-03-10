<?php
function register_picture($login)
{
    if (isset($_FILES["avatar"]) && !empty($_FILES["avatar"])) {
        $file_name = $_FILES['avatar']['name'];
        $ext = strrchr($file_name, '.');
        $file_to_save = $_FILES['avatar']['tmp_name'];
        $extention_autorier = ['.png', '.jpg', '.jpeg', '.gif'];
        $file_name = $login . $ext;
        $file_route = ROOT . "public" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR . $file_name;

        if (in_array($ext, $extention_autorier)) {
            if (move_uploaded_file($file_to_save, $file_route)) {
                $chemin = $file_name;
            }
        } else {
            $errors['avatar'] = "choisseez une photo au bon format";
        }
    }
}