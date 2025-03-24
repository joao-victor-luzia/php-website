<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>

    <?php 
    include_once 'includes/config_session.inc.php';
    if(isset($_SESSION['user_id'])){
        header('Location: posts.php');
    }
    ?>
    <article class = "login">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Usuario"><br>
            <input type="password" name="pwd" placeholder="Senha"><br>
            <button type="submit">Logar</button>
        </form>

        <?php
            include_once "includes/login_view.inc.php";
            check_login_errors();
        ?>

    <a href="index.php">Ainda não possui uma conta? clique aqui!</a>
    </article>
    </main>
</body>
</html>