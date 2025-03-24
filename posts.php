<?php

require_once "includes/config_session.inc.php";

if(isset($_SESSION["user_id"])){
    $username = $_SESSION["username"];
    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT coment_text, username FROM users INNER JOIN posts ON (users.id = posts.user_id)";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
        
    } catch (\PDOException $e) {
        die("Querry falhou em posts" . $e->getMessage());
    }

}else{
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>Resultados</h2>

    <?php 
    
        
        
       
        
        foreach ($results as $post){
            echo "<p><b>" . $post["username"]. "<b>: " . htmlspecialchars($post["coment_text"]) . "</p>";

        }
        
    

    ?>

    
    
</form>

</body>
</html>