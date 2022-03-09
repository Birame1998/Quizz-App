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
                </div>
            </div>
            <div class="cr-contain-form">
                <div class="cr-form-controller">
                    <label for="cr-point">Nombre de point</label>
                    <input type="number" name="" id="cr-point" min="1">
                </div>
                <div class="cr-form-controller">
                    <label for="">Type de réponse</label>
                    <select name="" id="" value="here">
                        <option value=""></option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                    <a href="">
                        <img src="<?= WEB_ROOT . "img/" . "ic-ajout-réponse.png" ?>" alt="">
                    </a>
                </div>

                <div class="cr-form-controller">
                    <label for="">Réponse 1</label>
                    <input type="text">
                    <input type="checkbox" name="" id="">
                    <input type="radio" name="" id="">
                    <a href="">
                        <img src="<?= WEB_ROOT . "img/" . "ic-supprimer.png" ?>" alt="">
                    </a>
                </div>
                <div class="cr-contain-btn">
                    <button>Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>