<div class="next-prev">
    <?php
    for ($page = 1; $page <= $nombre_page; $page++) {
        // echo "<a class='next acc-butt-prev-next' href='?controller=user&action=liste.joueurs&page=$page' id='link-for-page'>$page</a>";
    }
     if ($page_actuel > 1) {
                $precedent = $page_actuel - 1;
                echo "<a class='previous acc-butt-prev-next' for='link-for-page' href='?controller=user&action=liste.joueurs&page=$precedent' id='link-for-page'>Precedent</a>";
        }
        if ($page_actuel < $page) {
            $suivant = $page_actuel + 1;
            echo "<a class='next acc-butt-prev-next' for='link-for-page' href='?controller=user&action=liste.joueurs&page=$suivant' id='link-for-page'>suivant</a>";
        }
    ?>
</div>

<!--<div class="next-prev">
    <a href="<?= '?controller=user&action=liste.joueurs&page=$precedent' ?>" class="previous acc-butt-prev-next" for="link-for-page">Precedent</a>
    <a href="<?= '?controller=user&action=liste.joueurs&page=$suivant' ?>" class="next acc-butt-prev-next" for="link-for-page">Suivant</a>
</div>