<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h2>Registrar</h2>
        <form action="includes/signup.inc.php" method="post">
            <?php
            include_once "includes/signup_view.inc.php";
            signup_inputs();
            ?>
            <button type="submit">Registrar</button>
        </form>

        <?php 
            
            check_signup_errors();
        ?>

        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Usuario"><br>
            <input type="password" name="pwd" placeholder="Senha"><br>
            <button type="submit">Login</button>
        </form>

        <?php
            include_once "includes/login_view.inc.php";
            check_login_errors();
        ?>

        <h2>Logout</h2>

        <form action="includes/logout.inc.php" method="post">
            <button>Logout</button>
            
        </form>
        
        <?php 

            if(isset($_SESSION["user_id"])){
                echo'
                <form action="posts.php" method="post">
                <button>acessar posts</button>';
            }
        ?>
        </form> 
            
            
        

    </main>
</body>
</html>