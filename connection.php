<?php

$servername = "localhost";
$username = "coderslab";
$password = "coderslab";
$baseName = "WAR_PHP_W_07_Twitter";

//Tworzenie nowego połączenia
try {
    $conn = new PDO("mysql:charset=utf8;dbname=$baseName", 
            $username, 
            $password, 
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
} catch(PDOException $e) {
    echo 'Wystąpił błąd przy połączeniu do bazy danych: ' . $e->getMessage();
}