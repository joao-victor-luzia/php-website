<?php
require_once 'config_session.inc.php';
require_once 'dbh.inc.php';
require_once 'posts_model.inc.php';
require_once 'posts_contr.inc.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_SESSION["username"];
    try {
        $coment_text = $_POST['coment_text'];
        $userId = $_SESSION["user_id"];
        set_post($pdo, $coment_text, $userId);
        header('Location: ../posts.php');
        $pdo = null;
        $stmt = null;
        die();
    } catch (\PDOException $e) {
        die("Querry falhou em posts" . $e->getMessage());
    }

}else{
    echo "o que há de errado";
}

