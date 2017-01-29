<?php

// Il faut donner une valeur de départ
$qte = 0;

while($qte < 10) {
    // On attend que la classe se remplisse
    echo "La classe n'est pas remplie " . $qte;
    echo "<br>";

    // On pourrait écrire $qte++
    // Si on ne fait de changement à la valeur, la boucle sera infinie
    $qte = $qte + 3;
}

?>