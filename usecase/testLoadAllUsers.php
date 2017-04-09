<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../connection.php';

var_dump(User::loadAllUsers($conn));

