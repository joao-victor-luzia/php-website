<?php

//apresentar algo no site
declare(strict_types=1);

include_once "config_session.inc.php";
include_once "posts_model.inc.php";


function print_posts(){
    $results = get_posts();
    foreach ($results as $post){
        echo "<article class='post'><h2>" . htmlspecialchars($post["username"]). "</h2> <p>" . htmlspecialchars($post["coment_text"]) . "</p></article>";

    }
}

