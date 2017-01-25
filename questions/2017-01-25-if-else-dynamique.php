<?php

/**
 * Comment avez-vous su que le menu déroulant comportait seulement cette partie
 * du code ? Est-ce que vous l'aviez dit à la fin du cours ?
 */

/**
 * Réponse :
 *
 * 1. Au début, il s'agit d'un jeu d'essais-erreurs.
 * Vous pouvez confirmer en enlevant une portion de code et en analysant l'impact.
 *
 * 2. Vous pouvez également chercher sur google pour des indices qui confirment
 * votre intuition et vos déductions.
 */

/**
 * Également, je me demande pourquoi le else fonctionne puisque vous avez fermé
 * le php. Si le php est fermé, comment se fait-il que du contenu (le veuillez
 * vous connecter) soit afficher dynamiquement?
 */

/**
 * Il ne faut pas être mélangé par la fermeture (ou l'ouverture) d'une balise
 * PHP (<?php ?>). Fiez-vous plutôt au jeu d'accolades pour les conditions
 * if/else ({ ici est le secret }).
 */

?>

<?php

$estConnecte = true;

?>


<?php

if ($estConnecte) {
    echo 'Je suis dans le PHP';
} else {
    echo 'Ceci est un test';
}

?>

