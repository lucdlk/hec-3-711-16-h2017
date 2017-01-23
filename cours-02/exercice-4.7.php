<?php

// Assignation/affectation des variables et valeurs
$qteConnexionsLinkedin = 100;
$qteAmisFacebook = 100;

// bloc if/else pour affichage dynamique
if ($qteConnexionsLinkedin > $qteAmisFacebook) {
    echo "J'ai plus de connexions Linkedin que d'amis Facebook";
} else {
    if ($qteConnexionsLinkedin == $qteAmisFacebook) {
        echo "Je suis aussi populaire sur FB que sur Lindekin";
    } else {
        echo "J'ai plus d'amis Facebook que de connexions Lindekin";
    }
}

?>