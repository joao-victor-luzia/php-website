<?php

//apresentar algo no site
declare(strict_types=1);

include_once "config_session.inc.php";

function check_signup_errors(){
    if(isset($_SESSION["errors_signup"])){
        $errors = array_values($_SESSION["errors_signup"]);
        unset($_SESSION["errors_signup"]);
        
        foreach($errors as $error){
            echo "<p class='erros'>" . $error . "</p>";
        }
        
    } else if (isset($_GET["signup"]) and $_GET["signup"] ==='success') {
        echo "<p class='success'> Cadastrado com sucesso! </p>";
    }
}

function signup_inputs() {
    if (isset($_SESSION["signup_data"]['username']) and 
    !isset($_SESSION["errors_signup"]['username_taken'])){
        echo '<input type="text" name="username" placeholder="Usuario" value="'. htmlspecialchars( $_SESSION["signup_data"]['username']).'"><br>';
    }else{
        echo '<input type="text" name="username" placeholder="Usuario"><br>';
    }


    echo '<input type="password" name="pwd" placeholder="Senha"><br>';


    if (isset($_SESSION["signup_data"]['email']) and 
    !isset($_SESSION["errors_signup"]['email_used'])){
        echo '<input type="text" name="email" placeholder="Email" value="'.htmlspecialchars($_SESSION["signup_data"]['email']).'"><br>';
    }else{
        echo '<input type="text" name="email" placeholder="Email"><br>';
    }

    
}

