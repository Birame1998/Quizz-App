<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."accueil.style.css" ?>">
    <title>Accueil</title>
</head>
<body>
    <div class="header">
    <div class="big-title"><h1>CREÉR ET PARAMÉTRER VOS QUIZZ</h1></div>    
    <div class="deconnexion"><input type="submit" value="Déconnexion"></div>
    </div>
    <div class="main">
        <div class="taches-admin">
            <div class="avatar">                
            </div>
            <div class="taches">
                <div class="liste-question">
                    <label for="">Liste Questions</label>
                    <div class="img1"></div>
                </div>
                
                <div class="liste-joueurs">
                    <label for="">Liste Joueurs</label>
                    <div class="img3"></div>
                </div>
                <div class="creer-questions">
                    <label for="">Créer Questions</label>
                    <div class="img4"></div>
                </div>
                <div class="creer-admin">
                    <label for="">Créer un admin</label>
                    <div class="img2"></div>
                </div>
            </div>
        </div>
        <div class="questions"></div>
    </div>
</body>
</html>