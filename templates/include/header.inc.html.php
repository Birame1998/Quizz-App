<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quizz App</title>
</head>
<body>
<div class="header">
        <div class="logo"></div>
        <h1 class="slogan">Le plaisir de jouer</h1>
        <?php
        if (isset($_SESSION[KEY_ERRORS])) {
            $errors=$_SESSION[KEY_ERRORS];
            unset($_SESSION[KEY_ERRORS]); 
        }
        ?>
</div>