<?php

// Démonstration simple d'un tableau numérique
$previsions = [
    -8, // demain
    -4, // après-demain
    -5
];

// Ajout de valeur à un tableau numérique
// -8, -4, -5, -9
$previsions[] = -9;

// Utilisez index 0 pour première valeur
echo "La prévision pour demain est $previsions[0].<br>";

// Logiquement, utilisez index 1 pour deuxième valeur
echo "La prévision pour apres-demain est $previsions[1].<br>";

$previsions[0] = -2;
echo "La prévision pour demain a été changée à $previsions[0].<br>";

// pour enlever un élément
var_dump($previsions);
unset($previsions[3]);
var_dump($previsions);
?>