<?php

$db->exec("INSERT INTO inscriptions (matricule, nom) 
VALUES ('" . $_POST['matricule'] . "', 
        '" . $_POST['nom'] . "')");

?>