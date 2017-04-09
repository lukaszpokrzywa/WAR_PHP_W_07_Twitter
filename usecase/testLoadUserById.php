<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../connection.php';

var_dump(User::loadUserById($conn, 3));
var_dump(User::loadUserById($conn, 5));


