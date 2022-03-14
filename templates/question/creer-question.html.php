<?php
if (isset($_SESSION['success-question'])) {
    $susses=$_SESSION['success-question'];
    unset($_SESSION['success-question']);
}
?>
<div class="cr-contain-create">
    <div class="cr-header">
        <h1>PARAMETRER VOTRE QUESTION</h1>
        <?php if(isset($susses)):?>
        <h3 class="cr-success"><?= $susses ?></h3>
        <?php endif ?>
    </div>
    <div class="cr-contain-question">
        <form id="cr-question-form" action="<?= WEB_ROOT ?>" method="post">
            <input type="hidden" name="controller" value="question">
            <input type="hidden" name="action" value="question">
            <div class="cr-head-quest">
                <div class="cr-Question">
                    <label for="question">Question</label>
                </div>
                <div class="cr-head-blanc-space">
                    <textarea placeholder="intetulé de la question" name="intetule_question" id="question" autofocus></textarea>
                    <span class="error-crq"></span>
                </div>
            </div>
            <div class="cr-contain-form">
                <div class="cr-form-controller">
                <label for="cr-point">Nombre de points</label>
                    <button class="moins-number ajout-retrait" type="button">-</button>
                    <input type="text" name="nombre_points" id="cr-point"  value="1">
                    <button class="plus-number ajout-retrait" type="button">+</button>
                    <span class="error-number"></span>
                </div>
                <div class="cr-form-controller">
                    <label for="">Type de réponse</label>
                    <select id="type-question" name="selecteur">
                        <option>Donner le type de reponse</option>
                        <option value="simple">Simple</option>
                        <option value="text">Texte</option> 
                        <option value="multiple">Multiple</option>
                    </select>
                    <button class="cr-add-answerbtn" type="button"></button>
                    <small class="cr-expique-consigne"></small>
                </div>
                <div class="answer_contain"> </div>
                <div class="cr-contain-btn">
                    <button>Enregistrer</button>
                </div>
        </form>
    </div>
</div>
</div>