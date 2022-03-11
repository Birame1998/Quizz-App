<?php
<<<<<<< HEAD
function register_picture($login,$chemin,$errors)
=======
function register_picture($login,$role)
>>>>>>> cea3d513f0a7e8c2576c2eee28578c93b31a7954
{
    $part_name[0]=explode('@',$login);
    $file_name=$part_name.$role;

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
function is_image($name_image)
{
    $file_name = $_FILES['avatar']['name'];
    $ext = strrchr($file_name, '.');
    $file_to_save = $_FILES['avatar']['tmp_name'];
    $extention_autorier = ['.png', '.jpg', '.jpeg', '.gif'];
}
