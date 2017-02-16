<?php

class Person {

    public $name;
    public $souliers;

    public function __construct($name, $couleur) {
        $this->name = $name;
        $this->souliers = $couleur;
    }
}


$personne1 = new Person('Daniel', 'noirs');
$personne2 = new Person('Roger', 'rouge');

var_dump($personne1);
var_dump($personne2);

?>