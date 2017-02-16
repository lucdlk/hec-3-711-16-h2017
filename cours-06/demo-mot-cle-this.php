<?php

class Auto {
    public $marque;
    public $annee;

    // Afficher l'âge de l'auto
    public function getAge() {
        echo $this->annee;
    }

    public function getMarque() {
        var_dump($this);
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

}

$auto1 = new Auto();
$auto1->marque = 'BMW';
$auto1->annee = 2006;

$auto2 = new Auto();
$auto2->marque = 'Dodge';
$auto2->annee = 2003;

$auto2->setAnnee(2010);

var_dump($auto2);

$auto2->getMarque();


?>