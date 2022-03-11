<div class="cr-contain-create">
    <div class="cr-header">
        <h1>PARAMETRER VOTRE QUESTION</h1>
    </div>
    <div class="cr-contain-question">
        <form id="cr-question-form" action="" method="post">
            <input type="hidden" name="controller" value="question">
            <input type="hidden" name="action" value="question">
            <div class="cr-head-quest">
                <div class="cr-Question">
                    <label for="question">Question</label>
                </div>
                <div class="cr-head-blanc-space">
                    <textarea placeholder="intetulé de la question" name="intetule_question" id="question" autofocus></textarea>
                </div>
            </div>
            <div class="cr-contain-form">
                <div class="cr-form-controller">
                    <label for="cr-point">Nombre de point</label>
                    <input type="number" name="nombre_point" id="cr-point" min="1">
                </div>
                <div class="cr-form-controller">
                    <label for="">Type de réponse</label>
                    
                    <button class="cr-add-answerbtn" type="button"></button>
                </div>
                <div class="answer_contain">
                    <!-- le contenu du formulaire crée en JS -->

                    <!-- <div class="cr-form-controller">
                         <label for="">Réponse 1</label>
                        <input type="text" id="cr-txt">
                        <input type="checkbox" name="" id="cr-check">
                        <input type="radio" name="" id="cr-rad">
                        <button class="cr-delete-answerbtn" type="button"></button>
                    </div>  -->
                </div>
                <div class="cr-contain-btn">
                    <button>Enregistrer</button>
                </div>
        </form>
    </div>
</div>
</div>