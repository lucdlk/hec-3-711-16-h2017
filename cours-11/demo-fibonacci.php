<?php

session_start();

// $_SESSION['nombre1'] = 0;
// $_SESSION['nombre2'] = 1;
$_SESSION['nombre3'] = $_SESSION['nombre1'] + $_SESSION['nombre2'];

echo $_SESSION['nombre3'];

$_SESSION['nombre1'] = $_SESSION['nombre2']; //1 1
$_SESSION['nombre2'] = $_SESSION['nombre3']; //1 2
?>