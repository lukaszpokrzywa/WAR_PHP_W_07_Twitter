<?php

session_start();
if(isset($_SESSION['userId'])) {
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userEmail = trim($_POST['email']);
    $userPassword = trim($_POST['password']);
    require_once __DIR__ . '/src/User.php';
    require_once __DIR__ . '/connection.php';
    
    if($userId = User::login($conn, $userEmail, $userPassword)) {
        $_SESSION['userId'] = $userId; 
        header('Location: index.php');
    }
    
}

?>

<form method="POST">
    e-mail
    <input type="text" name="email">
    <br>
    password
    <input type="password" name="password">
    <br>
    <input type="submit">
</form>

