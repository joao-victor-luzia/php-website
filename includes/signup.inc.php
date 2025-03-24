<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        $errors = [];

        if (is_input_enpty($username, $pwd, $email)){
            $errors['empty_input'] = 'Preencha todos os campos';
        }
        if (is_email_invalid($email)) {
            $errors['invalid_email'] = 'EMail inválido';
        }
        if(is_username_taken($pdo, $username)){
            $errors['username_taken'] = 'O nome de usuário já existe';
        }
        if (is_email_registered($pdo, $email)){
            $errors['email_used'] = 'O email já está sendo usado';
        }

        include_once "config_session.inc.php";

        if ($errors){
            $_SESSION["errors_signup"] = $errors;
            $signupData=[
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $username, $pwd, $email);
        header("Location:../login.php");
        $pdo = null;
        $stmt = null;
        die();

    }catch(PDOException $e){
        die("conecção falhou" . $e);

    }
}else{
    header("Position: ../index.php");
}