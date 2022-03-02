<?php
function find_data(string $key):array{
    $json=file_get_contents(PATH_DB);
    $arr=json_decode($json,true);
    return($arr[$key]); 

}






