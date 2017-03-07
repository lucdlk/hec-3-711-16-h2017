<?php

class Resultat {

    public $titre;

    public $lien;

    public $description;

    public $estAnnonce;

    public function __construct($nom, $lien, $description, $estAnnonce = false) {
        $this->titre = $nom;
        $this->lien = $lien;
        $this->description = $description;
        $this->estAnnonce = $estAnnonce;
    }

    public function estUneAnnonce() {
        return $this->estAnnonce;
    }

}

$resultat1 = new Resultat(
    'RDS.ca: Sports - nouvelles & résultats | statistiques, vidéos, photos',
    'http://www.rds.ca/',
    'Le site officiel du Réseau des sports, la chaîne de télévision sportive québécoise qui diffuse 24 heures par jour des événements sportifs et des nouvelles du..'
);

$resultat2 = new Resultat(
    'Red Dragon Apparel',
    'http://www.reddragonapparel.com/',
    'The RDS Spring 2017 line is now available! Tons of new Mens and Womens apparel and accessories in stores, online and in the RDS Showroom!'
);

$resultat3 = new Resultat(
    'Réseau des sports - Wikipedia',
    'https://en.wikipedia.org/wiki/Réseau_des_sports',
    'Réseau des sports (commonly abbreviated as RDS), is a Canadian French language Category C specialty channel showing sports and sport-related shows.',
    true
);

$resultat4 = new Resultat(
    'Radio Data System - Wikipedia',
    'https://en.wikipedia.org/wiki/Radio_Data_System',
    'Radio Data System (RDS) is a communications protocol standard for embedding small amounts of digital information in conventional FM radio broadcasts.'
);

// Tableau d'objets
$resultats = [
    $resultat1,
    $resultat2,
    $resultat3,
    $resultat4
];

// var_dump($resultats);

?>