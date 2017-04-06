<?php

//1ère étape: session_start()
session_start();


$_SESSION['prenom'] = 'Daniel';

echo $_SESSION['prenom'];

?>