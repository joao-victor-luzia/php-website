<?php

declare(strict_types=1);

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = array_values($_SESSION["errors_login"]);
        unset($_SESSION["errors_login"]);
                
        foreach($errors as $error){
            echo "<p class='erros'>" . $error . "</p>";
        }
        
    } else if (isset($_GET["login"]) and $_GET["login"] ==='success') {
        echo "<p class='success'> Logado com sucesso! Seja bem vindo " . $_SESSION["username"] . " </p>";
    }
}