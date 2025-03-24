<?php

require_once "includes/config_session.inc.php";
require_once "includes/posts_view.inc.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>criar post</h2>
    <form action="includes/posts.inc.php" method="post">
            <input type="text" name="coment_text" placeholder="Digite seu post aqui"><br>
            
            <button type="submit">postar</button>
        </form>

    <h2>Resultados</h2>

    <?php 
    
       print_posts();
        
    ?>

    
    
</form>

</body>
</html>