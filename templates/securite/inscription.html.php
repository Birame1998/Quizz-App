<?php
if (isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
?>
<div class="main">    
    <div class="ins-contain">
        <!-- ------------------------------------------------------------------------------- -->
        <?php require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "ins-form.inc.html.php");?>       
        <!-- ------------------------------------------------------------------------------- -->
        
    </div>
</div>
</div>


<?php require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "footer.inc.html.php");?>