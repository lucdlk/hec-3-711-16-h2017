<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    enregistrerSimulation();
}

include('app.html.php');

// Cette fonction devrait être définie par un spécialiste des bases de données
function enregistrerSimulation() {
    echo 'La pratique a été faite le ' . $_POST['date_pratique'] . '.<br>';
    echo 'Le pilote était ' . $_POST['nom_pilote'] . '.<br>';
    echo 'Le type d\'avion  était un ' . $_POST['type_avion'] . '.<br>';
    echo 'La quantité d\'heures de pratique est ' . $_POST['qte_heures_pratiques'] . ' heures.<br>';
}

?>
