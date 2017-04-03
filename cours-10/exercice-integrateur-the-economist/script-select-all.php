<?php

$query = $db->query('SELECT * FROM abonnements');
$results = $query->fetchAll(PDO::FETCH_OBJ);

?>