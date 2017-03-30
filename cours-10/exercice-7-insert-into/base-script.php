<?php

$db->exec("INSERT INTO publications (description) VALUES ('" . $_POST['publication'] . "')");

?>