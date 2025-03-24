<?php

//apresentar algo no site
declare(strict_types=1);

include_once "config_session.inc.php";
include_once "posts_model.inc.php";


function print_posts(){
    $results = get_posts();
    foreach ($results as $post){
        echo "<article class='post'><h4 class = 'username'>" . htmlspecialchars($post["username"]). "</h4> <p>" . htmlspecialchars($post["coment_text"]) . "</p>". "<span class= 'date'>" . htmlspecialchars($post["posted_at"]) . "</span>" ."</article>";

    }
}

