<?php

// 1. Initialisation de la variable
// 2. Condition arrêt (ou vu comme la condition pour continuer)
// 3. Itération sur la variable
for ($tempF = -50; $tempF <= 50; $tempF = $tempF + 5) {

    // Calcul de la valeur en Celsius
    $tempC = round(($tempF - 32) * 5/9, 2);

    // Affichage de la valeur en F, et en C à sa droite.
    echo "$tempF, $tempC <br>";

}

echo "Ceci est un test.";




?>