<?php

include('compta.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pourcentageTaxes = $_POST['pourcentage_taxes'] / 100;
    $montant = $_POST['montant'];

    $montantTotal = calculMontantTotal($montant, $pourcentageTaxes);
}

include('app.html.php');

?>