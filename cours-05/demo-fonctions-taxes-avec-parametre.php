<?php

function computeTaxes($montant, $taxes = .15) {
    echo "Les taxes sont de $taxes <br>";
    // echo "Le montant total est de " . $montant * (1 + $taxes) . '<br>';
    return $montant * (1 + $taxes);
}

$cellulaire = 500;
$bouteille = 1.49;

$cellulaireAvecTaxes = computeTaxes($cellulaire);
$bouteilleAvecTaxes = computeTaxes($bouteille, 0.40);

echo $cellulaireAvecTaxes . '<br>';
echo $bouteilleAvecTaxes;

?>