<?php

require_once "includes/config_session.inc.php";
require_once "includes/posts_view.inc.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/posts_style.css">
</head>

<body>
    <main>

        <h2>Logout</h2>

        <header>
            <nav>
                <?php echo "<p><b>" . $_SESSION['username'] . "</b></p>" ?>

                <form action="includes/logout.inc.php" method="post">
                    <button>Logout</button>

                </form>
            </nav>
        </header>

        <article class="send_post">
            <h2>criar post</h2>
            <form action="includes/posts.inc.php" method="post">
                <input type="text" name="coment_text" placeholder="Digite seu post aqui"><br>

                <button type="submit">postar</button>
            </form>

        </article>

        <section class="posts">
            <h2>Posts de outros usuários:</h2>

            <?php
            print_posts();
            ?>


        </section>
    
    </form>
    </main>

</body>

</html>