<?php
define('ROOT',str_replace("public".DIRECTORY_SEPARATOR."index.php",'',$_SERVER['SCRIPT_FILENAME']));



define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);

define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

define("WEB_ROOT","http://localhost/quizzApp/public");
define("KEY_ERRORS","errors");
define("KEY_USER_CONNECT","user-connect");
// define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));