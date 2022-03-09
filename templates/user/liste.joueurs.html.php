<div class="player-list"> <!-- Cette div est fermée dans la page d'accueil  -->
<h2 class="listedesjoueurs">Liste des joueurs par score</h2>
    <table>
            <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Score</th>
            </tr>
            <?php 
 
            foreach ($data as $value) :?>
            <tr>
              <td><?=$value['nom'] ?></td>
              <td><?=$value['prenom'] ?></td>
              <td><?=$value['score']?></td>
            </tr>
            <?php endforeach ?>
     </table>
          
