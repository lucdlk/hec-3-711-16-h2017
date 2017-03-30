<?php

/**
 * Initialisation de la connexion à la base de données.
 * Changer 'danielparpal' pour votre nom d'utilisateur.
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=c9', 'danielparpal');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db->exec("set names utf8");


/**
 * Trouve tous les produits à vendre dans la base de données.
 */
$db->exec("INSERT INTO people (name, address) VALUES ('Daniel Parpal', '111 Avenue du Parc')");

echo 'La requête a été exécutée.';

?>