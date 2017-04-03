<?php

$query = $db->query('SELECT * FROM inscriptions');
$results = $query->fetchAll(PDO::FETCH_OBJ);

?>