<?php

/**
 * Dans cette expression :
 * (!($nombre % 3 == 0) && !($nombre % 7 == 0) && !($nombre % 11 == 0))
 * Je ne comprends pas bien à quoi sert le point d'exclamation
 */

// Première utilisation du !, dans le contexte de != (n'est pas égal à)
$a = 3;

if ($a != 3) {
    echo '$a n\'est pas égal à 3';
} else {
    echo '$a est égal à 3';
}

echo '<br><br>';

// Deuxième utilisation du !, True if $x is not true
// "Inverse la valeur : vrai->faux, faux->vrai"

$nombre = 2;

// Premier cas : avec le nombre 3, l'expression est vraie -> donc exécute if
// Deuxième cas : avec le nombre 2, l'expression est fausse -> donc exécute else
// Troisième cas : avec le nombre 3 et l'opérateur !, l'expression est fausse -> donc exécute else
// Quatrième cas : avec le nombre 2 et l'opérateur !, l'expression est vraie -> donc exécute if
if (!($nombre % 3 == 0)) {
    echo "Le nombre est parfaitement divisible par 3 (sans reste).";
} else {
    echo "Le résultat de la division contient un reste (nombre décimal).";
}

?>