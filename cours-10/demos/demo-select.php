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
$query = $db->query('SELECT * from people');
$results = $query->fetchAll(PDO::FETCH_OBJ);

/**
 * Utilisation des résultats obtenus.
 * Ici, nous ne faisons qu'afficher le contenu de la variable, mais
 * nous pourrions très bien faire plus.
 *
 * La variable $results est un tableau contenant des objets.
 * Allez voir les cours 6 et 7 la-dessus.
 */
foreach($results as $result)
{
    echo $result->name . '<br>';
}

?>