<?php

// Créer la connexion à la base de données grâce aux objets PDO
include('connexion-db.php');


// Ajoute un nouvel abonnement à la base de données
// Conditionnel à l'accès de la page en soumission de formulaire (requête de type POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('script-ajout-abonnement.php');
}


// Récupère toutes les entrées (lignes) de la table des abonnements
include('script-select-all.php');


// Inclure le fichier responsable de l'affichage (niveau le plus global)
// Ce fichier appelle les composantes nécessaires (niveaux en-dessous)
include('app.html.php')

?>