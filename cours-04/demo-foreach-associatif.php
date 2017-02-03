<?php

// Tableau associatif d'étudiants
$etudiantsAssociatif = [
    'm2612525' => 'Étienne',
    'm8372662' => 'Anh-tuân',
    'm5525252' => 'Daniel',
    'm0283872' => 'Pierre'
];

// Si on utilise la première version du foreach (numérique)
foreach($etudiantsAssociatif as $patate) {
    echo $patate . '<br>';
}

// Par contre, si on a besoin de la clé
// Encore une fois, il n'y a pas de nom de variable magique,
// c'est l'ordre qui détermine ce qui va dans la clé et dans
// la valeur
foreach($etudiantsAssociatif as $key => $etudiant) {
    $key = 'dsfgsdfg';
    $etudiant = 'AAAA';
    echo $key . '<br>';
}

var_dump($etudiantsAssociatif);

?>