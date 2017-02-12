<?php

// Notes des étudiants
$etudiants = [
    'matricule1' => [4, 5, 5, 3, 5, 4],
    'matricule2' => [5, 5, 4, 5, 5, 4]
];

// On veut écrire une fonction qui permet de trouver la pire note pour
// un matricule donné.
// 1er argument : ensemble des notes (de l'array $etudiants)
// 2ème argument : matricule spécifique pour lequel nous voulons trouver la pire note
function trouverPireNote($notes, $matricule) {
    echo "La pire note pour $matricule est " . min($notes[$matricule]) . "<br>";
}

// Un peu plus compliqué, requiert du travail manuel
// Par contre, ne requiert pas une fonction native PHP
function trouverPireNoteManuellement($notes, $matricule) {
    $pireNote = 100000;

    foreach($notes[$matricule] as $note) {
        if ($note < $pireNote) {
            $pireNote = $note;
        }
    }

    echo "La pire note pour $matricule est $pireNote. <br>";
}

trouverPireNote($etudiants, 'matricule1');
trouverPireNote($etudiants, 'matricule2');

trouverPireNoteManuellement($etudiants, 'matricule1');
trouverPireNoteManuellement($etudiants, 'matricule2');

?>