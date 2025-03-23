<?php

//tratar dados do usuario 
declare(strict_types=1);

function is_input_enpty(string $username, string $pwd, string $email){
    if (empty($username) or empty($pwd) or empty($email)){
        return true;
    }
    return false;
}
function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}

function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    }
    return false;
    
}
function is_email_registered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    }
    return false;
    
}

function create_user(object $pdo, string $username, string $pwd, string $email){
    
    set_user($pdo, $username, $pwd, $email);
}



