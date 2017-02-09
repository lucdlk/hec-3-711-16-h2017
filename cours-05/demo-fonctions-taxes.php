<?php

function computeTaxes($montant) {
    echo "Envoi par courriel <br>";
    return $montant * 1.09;
}

$cellulaire = 500;
$bouteille = 1.49;

$cellulaireAvecTaxes = computeTaxes($cellulaire);
// Enregistre dans une BdD
$bouteilleAvecTaxes = computeTaxes($bouteille);
// Enregistre dans une BdD

echo $cellulaireAvecTaxes . '<br>';
echo $bouteilleAvecTaxes;

?>