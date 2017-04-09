<?php

require_once __DIR__ . '/src/User.php';

$user1 = new User();
var_dump($user1);

$user1->setUsername('user1');
$user1->setEmail('user1@email.com');
$user1->setPassword('pass_464768');

var_dump($user1);
