<?php

session_start();
if(!isset($_SESSION['userId'])) {
    header('Location: login.php');
} else {
    echo 'Jesteś zalogowany<br>';
    echo $_SESSION['userId'];
    echo '<br>';
    echo "<a href='logout.php'>Wyloguj</a>";
}
