<?php

// Initialisation de la valeur de la variable dans la condition
$tempF = -50;

while($tempF <= 50) {

    // exécute la fonction
    $tempC = round(($tempF - 32) * 5/9, 2);

    // Affichage de la valeur en F, et en C à sa droite.
    echo "$tempF, $tempC <br>";

    // Modification à la valeur de la variable à chaque itération
    $tempF = $tempF + 5;
}


?>