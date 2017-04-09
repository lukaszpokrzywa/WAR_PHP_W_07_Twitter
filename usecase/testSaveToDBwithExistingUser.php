<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../connection.php';

$user = User::loadUserById($conn, 3);
$user->setUsername('userw0003');
$user->setEmail('userw003@email.com');
var_dump($user);
$user->saveToDB($conn);