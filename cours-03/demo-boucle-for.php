<?php

// Le cours commencera lorsqu'il y a 50 étudiants
// 1er paramètre : initialisation
// 2ème paramètre : test (condition à satisfaire)
// 3ème paramètre : changement de valeur à la variable

for ($qte = 0; $qte < 50; $qte = $qte + 1)
    echo "La classe n'est pas encore pleine $qte <br>";
?>