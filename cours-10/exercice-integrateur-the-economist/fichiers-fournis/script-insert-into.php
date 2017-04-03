<?php

$db->exec("INSERT INTO abonnements (title, given_name, family_name, contact_phone_number, company, address, town_or_city) 
VALUES ('" . $_POST['title'] . "', 
        '" . $_POST['given_name'] . "', 
        '" . $_POST['family_name'] . "', 
        '" . $_POST['contact_phone_number'] . "', 
        '" . $_POST['company'] . "', 
        '" . $_POST['address_line_1'] . ' ' . $_POST['address_line_2'] . "', 
        '" . $_POST['town_or_city'] . "')");

?>
