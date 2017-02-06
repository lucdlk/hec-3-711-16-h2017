<?php

// Création d'un tableau multidimensionel d'étudiants
// N'oubliez pas : Un tableau permet de regrouper des données de même nature
// ou encore des données qui sont liées
$etudiants = [
    '7835' => [
        'nom' => 'Daniel',
        'moyenne' => 'B',
        'telephone' => '514-000-1234'
    ],
    '1534' => [
        'nom' => 'Pierre',
        'moyenne' => 'A',
        'telephone' => '514-222-4567'
    ],
    '2543' => [
        'nom' => 'Claudia',
        'moyenne' => 'B+',
        'telephone' => '514-999-6789'
    ],
    '2547' => [
        'nom' => 'Annie',
        'moyenne' => 'A+',
        'telephone' => '514-888-8888'
    ]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Matricule</th>
        <th>Moyenne</th>
        <th>Téléphone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($etudiants as $matricule => $etudiant) { ?>
        <tr>
            <td><?php echo $etudiant['nom']; ?></td>
            <td><?php echo $matricule; ?></td>
            <td><?php echo $etudiant['moyenne']; ?></td>
            <td><?php echo $etudiant['telephone']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>