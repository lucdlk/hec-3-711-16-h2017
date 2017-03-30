<?php

$query = $db->query('SELECT * FROM publications');
$results = $query->fetchAll(PDO::FETCH_OBJ);

?>