<?php
function findData(string $key):array{
    $json=file_get_contents(PATH_DB);
    $arr=json_decode($json,true);
    return($arr[$key]); 

}





function saveData(string $key,array $data):array
{
    # code...
}
