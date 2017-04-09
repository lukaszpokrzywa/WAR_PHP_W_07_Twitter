<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../connection.php';

$user = User::loadUserById($conn, 3);
if($user) {
    $user->delete($conn);
    var_dump($user);
}

$user2 = new User();
$user2->setEmail('user2@email.com');

var_dump($user2->delete($conn));