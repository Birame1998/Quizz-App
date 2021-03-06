<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEB_ROOT . "css" . DIRECTORY_SEPARATOR . "connexion.style.css" ?>" media="screen" type="text/css">
    <link rel="stylesheet" href="<?= WEB_ROOT . "css" . DIRECTORY_SEPARATOR . "inscription.style.css" ?>" media="screen" type="text/css">
    <link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "accueil.style.css" ?>">
    <link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "creerquestion.style.css" ?>">
    <link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "liste.question.style.css" ?>">
    <link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "VARIABLES.css" ?>">
    <title>Quizz App</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "logo-QuizzSA.png" ?>" alt="img" srcset="">
        </div>
        <div class="header-containt-tittle">
            <h1 class="slogan">Le plaisir de jouer</h1>
        </div>
        <?php
        if (isset($_SESSION[KEY_ERRORS])) {
            $errors = $_SESSION[KEY_ERRORS];
            unset($_SESSION[KEY_ERRORS]);
        }
        ?>
    </div>