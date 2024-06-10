<?php

$hostname = 'localhost';
$db = 'webapp2-db';
$user = 'root'; 
$password = ''; 

$dsn = "mysql:host=$hostname;dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
