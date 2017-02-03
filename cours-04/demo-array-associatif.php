<?php

// Création d'un tableau association -> lorsque la clé est pertinent
$previsions= [
    'demain' => -8,
    'apres_demain' => -4
];

// Pour ajouter une valeur, on doit spécifier la clé
$previsions['ajd'] = -9;

// Pour utiliser le tableau, il faut la clé
echo "Les prévisions pour ajd sont " . $previsions['ajd'];
echo '<br>';
echo "Les prévisions pour demain sont " . $previsions['demain'];
echo '<br>';

// Pour modifier une valeur
$previsions['demain'] = -4;
echo "Les prévisions pour demain sont maintenant " . $previsions['demain'];

// pour enlever un élément
var_dump($previsions);
unset($previsions['demain']);
var_dump($previsions);


?>