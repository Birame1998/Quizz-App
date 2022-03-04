<?php
function find_user_login_password(string $login,string $password):array
{
    //json_to_array = find_data
    $users=find_data("users");
    foreach ($users as $user) {
        if ($user['login']==$login && $user['password']==$password) {
            return $user;
        }
    }
    return [];
}
//pour la liste des users
function find_users(string $role):array{
    $users=find_data("users");
    $result=[];
    foreach($users as $user){
        if ($user['role']==$role) {
            $result[]=$user;
        }    
    }
        return $result;
}