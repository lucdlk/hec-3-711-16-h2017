<?php

// Le mot de passe clair viendra du formulaire
$mdpClair = 'rich123456';
// Le mot de passe haché viendra de la base de données
$mdpHash = '$2y$10$ZloObUzDcFGli5FPrOVlUuR1hxhJZqmxCB2sg9a8yHBj78fb.wahW';

$validation = password_verify($mdpClair, $mdpHash);

if ($validation) {
    echo 'La combinaison est bonne';
} else {
    echo 'La combinaison est mauvaise';
}

?>