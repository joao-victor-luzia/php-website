<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <article class = "signup">
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
            </form> 
            <a href="login.php">Já possui uma conta? clique aqui!</a>
        </article>
            
            
        

    </main>
</body>   
</html>