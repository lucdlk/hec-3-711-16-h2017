<?php

// $a = 2;
// echo $a;

session_start();
// $_SESSION['a'] = 5;
$_SESSION['a'] = $_SESSION['a'] + 5;
echo $_SESSION['a'];

?>