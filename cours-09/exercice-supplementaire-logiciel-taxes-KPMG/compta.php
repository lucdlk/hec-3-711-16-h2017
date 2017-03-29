<?php

function calculMontantTotal($montantDeBase, $pourcentageDeTaxes) {
    return $montantDeBase * (1 + $pourcentageDeTaxes);
}

?>