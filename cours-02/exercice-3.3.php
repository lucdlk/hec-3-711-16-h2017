<?php

// Variable qui contient la quantité d'amis Facebook
$quantiteAmisFacebook = 500;

// Variable qui contient le maximum d'amis sur Facebook
$quantiteMaximale = 5000;

// Variable utilisée pour le calcul intermédiaire
$quantiteManquante = $quantiteMaximale - $quantiteAmisFacebook;

// Affichage grâce à des guillemets doubles -> les variables seront interprétées
echo "J'ai $quantiteAmisFacebook amis facebook, il m'en manque $quantiteManquante pour atteindre le plateau des $quantiteMaximale.";
echo '<br>';

// Affichage grâce à des guillemets doubles -> les variables seront interprétées
// 1. Utiliser l'échappement (\) pour indiquer que ce n'est pas la fin du morceau de texte (String)
// 2. Enlever les variables des strings lorsqu'on utilise les guillemets simples (utiliser la concaténation avec le point .)
echo 'J\'ai ' . $quantiteAmisFacebook . ' amis facebook, il m\'en manque ' . $quantiteManquante . ' pour atteindre le plateau des ' . $quantiteMaximale . '.';

?>