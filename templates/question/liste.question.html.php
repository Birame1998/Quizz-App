<div class="list-contain-list-question">
    <div class="list-contain-form">
        <form action="" method="POST" id="list-form">
            <input type="hidden" name="controller" value="question">
            <input type="hidden" name="action" value="question">

            <label for="list-nombre_question">Nombre de question/jeu</label>
            <input type="text" id="list-nombre-question" name="nombre_question">
            <button>OK</button>
            <span class="error-crq" id="ok" style="margin-left: 2%;"></span>
        </form>
    </div>
    <div class="list-contain-question">
        <!-- <?= var_dump($toutes_les_questions) ?> -->
        <?php $i=1; foreach ($toutes_les_questions as $question) :?>
            <h3> <?= $i."  ".$question['intetule_question'] ?></h3>
            <?php foreach ($question['reponses'] as $value): ?>
            <p><?= $value  ?></p>
            <?php  endforeach ?>
            <?php $i++ ?>
        <?php  endforeach ?>

    </div>
    <div class="list-contain-btn">
        <a href="#" class="list-q-precedent">precedent</a>
        <a href="#" class="list-q-suivant">suivant</a>
    </div>
</div>