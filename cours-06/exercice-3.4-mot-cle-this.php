<?php

// mot-clé class
// Nom de la classe
// jeu d'accolades
class CoursHec {

    public $nomDuCours;

    public $etudiantsInscrits = [];

    public function inscrireEtudiant($etudiant) {
        $this->etudiantsInscrits[] = $etudiant;
    }

    // Faire le compte des étudiants
    public function validerQteEtudiants() {
        echo "Il y a " . count($this->etudiantsInscrits) . " étudiants inscrits.";
    }
}

$coursDAA = new CoursHec();

$coursDAA->inscrireEtudiant('Paul');
$coursDAA->inscrireEtudiant('Jacques');
$coursDAA->inscrireEtudiant('Denise');

$coursDAA->validerQteEtudiants();

$coursGBD = new CoursHec();
$coursGBD->validerQteEtudiants();

var_dump($coursDAA);
var_dump($coursGBD);


?>