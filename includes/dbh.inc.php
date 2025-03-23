<?php

$host = "mysql:host=localhost; dbname=sitedb";
$dbuser = "root";
$dbpwd = "";

try {
    $pdo = new PDO($host, $dbuser, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("conecção falou" . $e->getMessage());
}