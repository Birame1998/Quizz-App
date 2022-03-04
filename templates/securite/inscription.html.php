<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php"); 
?>
<link rel="stylesheet" href="<?= WEB_ROOT . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR . "inscription.style.css" ?>" media="screen" type="text/css">
<div class="main">
   <div class="ins-contain">
       <div class="ins-text">
           <div class="ins-titles">
               <h1 class="ins-title1">S'INSCRIRE</h1>
               <h3>Pour tester votre niveau de culture générale</h3>
               <hr>
           </div>
           <div class="ins-settings">
               <form action="<?=WEB_ROOT?>" method="POST" enctype="multipart/form-data">
               <div class="ins-form-controller">
               <label for="prenom">Prenom</label><br>
               <input type="text" name="prenom" id="prenom" placeholder="Aaaa">
               </div>
               <div class="ins-form-controller">
               <label for="nom">Nom</label><br>
               <input type="text" name="nom" id="nom" placeholder="BBBB">
               </div>
               <div class="ins-form-controller">
               <label for="login">Login</label><br>
               <input type="email" name="login" id="login" placeholder="aaaaa@gmail.com">
               </div>
               <div class="ins-form-controller">
               <label for="password">Password</label><br>
               <input type="password" name="password" id="password" placeholder=".......">
               </div>
               <div class="ins-form-controller">
               <label for="password2">Confirmer Password</label><br>
               <input type="password" name="password2" id="password2" placeholder=".......">
               </div>
               <div></div>
               <input type="file" name="avatar" id="avatar" value="Choisir un fichier"><br>
               <button>Creer compte</button>
               </form>
           </div>
       </div>
       <div class="ins-avatar"></div>
   </div>
      
</div>