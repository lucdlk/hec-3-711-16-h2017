<?php

// Création d'une connexion à la base de données
include('init-db.php');

// Si la page est accédée par soumission de formulaire (requête de type POST) :
// Nous voudrons ajouter le contenu du formulaire à la table des inscriptions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('insert-into-query.php');
}

// Récupération de toutes les lignes (entrées) de la table d'inscription
// Elles seront disponibles dans une variable nommée $results, qui est un tableau (array) d'objets
include('select-query.php');

// Calcul du nombre de places restantes suite à la requête SELECT sur la table des inscriptions.
$nombrePlaces = 10;
$qtePlacesRestantes = $nombrePlaces - count($results);

// Inclure le fichier qui gère l'affichage de la page
// Toujours inclure l'affichage en dernier
include('app.html.php');

?>