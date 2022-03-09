<?php
//json to array
function find_data(string $key):array{
    $json=file_get_contents(PATH_DB);
    $arr=json_decode($json,true);
    return($arr[$key]); 

}
//array to json
function save_data(string $key,array $data)
{
    // die("enregistrement");
    $data_json=file_get_contents(PATH_DB); //récupérer tous les donnees du fichier json
    $data_decoded=json_decode($data_json,true); //traduire en array
    $data_decoded[$key][]=$data;
    $final=json_encode($data_decoded,false);
    // var_dump($final);die;
    file_put_contents(PATH_DB,$final); 
}