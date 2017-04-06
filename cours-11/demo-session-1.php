<?php

// $a = 1;
// $a = $a + 1;
// echo $a;

session_start();

// $_SESSION['a'] = 1;
$_SESSION['a'] = $_SESSION['a'] + 1;
echo $_SESSION['a'];

?>