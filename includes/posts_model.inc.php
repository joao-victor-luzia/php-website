<?php
require_once 'dbh.inc.php';

function get_posts () {
    global $pdo;
    $query = "SELECT coment_text, username, posted_at FROM users INNER JOIN posts ON (users.id = posts.user_id)";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return array_reverse($results);
}

function set_post(object $pdo, string $text, int $userId){
    $query = "INSERT INTO posts (coment_text, user_id) 
    VALUES (:coment_text, :user_id);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':coment_text', $text);
    $stmt->execute();
}