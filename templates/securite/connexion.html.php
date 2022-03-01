<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."connexion.style.css"?>" media="screen" type="text/css">
    <title>Page de connexion</title>
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <h1>Le plaisir de jouer</h1>
    </div>
    <div class="main">   
        <div class="form-contain">
            <div class="header-form">
                <p>Login form</p>
            </div>
        <form action="" method="POST">
            <div class="connect-params">    
            <div class="login">
            <input type="email" name="login" placeholder="Login">
            <img src="<?=WEB_ROOT.DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."ic-login.png" ?>" alt="" width="5%" height="1%">
            </div>
            <div class="password">
            <input type="password" name="password" placeholder="Password">
            <img src="<?=WEB_ROOT.DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."ic-password.png" ?>" alt="" width="5%" height="1%">
            </div>
            </div>
            <div class="connect">
                <input type="submit" value="Connexion" id="connexion">
                <input type="submit" value="S'inscrire pour jouer" id="inscription">
            </div>
        </form>    
        </div>
    </div>
</body>
</html>