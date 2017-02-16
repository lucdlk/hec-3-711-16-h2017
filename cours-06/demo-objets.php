<?php

class Ordinateur {
    public $screen = 15;
    public $cpu;
    public $memory;
    public $user;
    public $type; // Mac ou PC

    public function __construct($name) {
        // echo "Je suis dans la fonction de construction. <br>";
        $this->user = $name;
    }

    public function boot() {

    }

    public function playSound() {

    }

    public function display() {
        echo "J'affiche sur une résolution de 1024x768.<br>";
    }
}

$ordinateurDaniel = new Ordinateur('Daniel');
$ordinateurMassilia = new Ordinateur('Massilia');

// $ordinateurDaniel->user = 'Daniel';
$ordinateurDaniel->type = 'Mac';
$ordinateurDaniel->type = 'PC';

// $ordinateurMassilia->user = 'Massilia';
$ordinateurMassilia->type = 'PC';

$ordinateurDaniel->display();

$ordinateurs = [
    $ordinateurDaniel,
    $ordinateurMassilia
];

var_dump($ordinateurs[0]);
var_dump($ordinateurDaniel);
// var_dump($ordinateurs[1]);

?>