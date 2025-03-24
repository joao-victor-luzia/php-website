<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'login_model.inc.php';
        $errors = [];

        if (is_input_enpty($username, $pwd)){
            $errors['empty_input'] = 'Preencha todos os campos';
        }
        $result = get_user($pdo, $username);

        if(is_username_wrong($result)){
            $errors['incorrect_login'] = 'O login não está correto';
        }
        if(!is_username_wrong($result) and is_password_wrong($pwd, $result['pwd'])){
            $errors['incorrect_login'] = 'O login não está correto';
        }

        

        include_once "config_session.inc.php";

        if ($errors){
            $_SESSION["errors_login"] = $errors;
            header("Location: ../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);
        $_SESSION['last_regeneration'] = time();
        $_SESSION["user_id"] = $result['id'];
        $_SESSION["username"] = htmlspecialchars($result['username']);

        header('Location: ../posts.php');
        $pdo = null;
        $stmt = null;
        die();

    } catch(PDOException $e){
        die("conecção de login falhou" . $e);

    }
    
   
}else{
    header("Position: ../index.php");
    die();
}