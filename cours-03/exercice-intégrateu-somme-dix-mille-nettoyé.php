<?php

// Création d'une variable permettant de stocker la somme courante dans la boucle.
$sommeCourante = 0;

/**
 * Éléments d'une boucle for() (séparés par un point virgule)
 * 1. Initialisation d'une variable qui sera utilisée pour la gestion de la boucle
 * 2. Condition sous laquelle la boucle se poursuit (lorsque faux,
 *      la boucle s'arrête)
 * 3. Modification faite à la variable à chaque itération
 */
for ($nombre = 1; $nombre <= 10000; $nombre = $nombre + 1) {

    // C'est ici que nous ferons les tests requis (if/else)
    if (!($nombre % 3 == 0) && !($nombre % 7 == 0) && !($nombre % 11 == 0)) {
        $sommeCourante = $sommeCourante + $nombre;
    }

}

echo "La somme des nombres entre 1 et 10000, en enlevant les nombres 
        divisibles par 3, 7 ou 11, est de $sommeCourante.";


?>