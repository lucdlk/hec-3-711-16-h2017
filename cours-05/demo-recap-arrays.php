<?php

/** Prenons le temps de faire une démonstration pour répondre à 2 questions
 *  qui m'ont été posées :
 *
 * 1. Pourquoi le foreach associatif?
 * 2. Démonstration d'un foreach avec des éléments <li></li>
 *
 * Première chose que je veux dire : il n'y a rien qui va remplacer la pratique!
 * Je peux vous faire des démonstrations, mais assurez-vous de jouer avec le code!
 * C'est cela qui vous donnera une compréhension réelle de la programmation.
 */

$autos = [
    'Y584957dkasjflk' => [
        'marque' => 'Dodge',
        'annee' => 1999
    ],
    'jdlk5450jjdjo' => [
        'marque' => 'Volks',
        'annee' => 2015
    ]
];

// foreach ($autos['Y584957dkasjflk'] as $key => $value) {
//     echo $key;
// }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($autos['Y584957dkasjflk'] as $key => $value) { ?>
        <li><?php echo $key; ?></li>
    <?php } ?>
</ul>
</body>
</html>