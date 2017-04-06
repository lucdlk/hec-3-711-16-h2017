<?php

// Le mot de passe clair viendra du formulaire
$mdpClair = 'mat123456';
// Le mot de passe haché viendra de la base de données
$mdpHash = '$2y$10$nQlGfOxfL/EeW9VL33n6J.F3IOtP9.vOxFs0kPqTy2oPrgQQZftfS';

$validation = password_verify($mdpClair, $mdpHash);

if ($validation) {
    echo 'La combinaison est bonne';
} else {
    echo 'La combinaison est mauvaise';
}

?>