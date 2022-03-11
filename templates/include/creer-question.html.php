<div class="cr-contain-create">
    <div class="cr-header">
        <h1>PARAMETRER VOTRE QUESTION</h1>
    </div>
    <div class="cr-contain-question">
        <form id="cr-question-form" action="" method="post">
            <div class="cr-head-quest">
                <div class="cr-Question">
                    <label for="question">Question</label>
                </div>
                <div class="cr-head-blanc-space">
                    <textarea name="" id="question"></textarea>
                    <span class="error-crq"></span>
                </div>
            </div>
            <div class="cr-contain-form">
                <div class="cr-form-controller">
                    <label for="cr-point">Nombre de points</label>
                    <button class="moins-number ajout-retrait" type="button">-</button>
                    <input type="text" name="nbr" id="cr-point"  value="1">
                    <button class="plus-number ajout-retrait" type="button">+</button>
                    <span class="error-number"></span>
                </div>
                <div class="cr-form-controller">
                    <label for="">Type de réponse</label>
                    <select name="" id="type-question" value="here">
                        <option>Donner le type de reponse</option>
                        <option value="simple">Simple</option>
                        <option value="text">Texte</option>
                        <option value="multiple">Multiple</option>
                    </select>
                        <button class="cr-add-answerbtn" type="button"></button>    
                </div>
                <div class="answer_contain">
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

