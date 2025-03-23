<?php

declare(strict_types=1);

function is_username_wrong(bool|array $result){
    if(!$result){
        return true;
    }
        return false;
    

}
function is_password_wrong(string $pwd, string $hashedPwd){
    if (password_verify($pwd, $hashedPwd)){
        return false;
    }else{
        return true;
    }
}
function is_input_enpty(string $username, string $pwd){
    if (empty($username) or empty($pwd)){
        return true;
    }
    return false;
}