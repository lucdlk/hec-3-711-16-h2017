<?php

/**
 * Ceci est le moule à partir duquel on va fabriquer les objets.
 */
class Produit
{
    public $path;

    public $category;

    public $description;

    public $prix;
}

// Création d'un objet de classe Produit, grâce à new
$crossfitNano6MenGreen = new Produit();
$crossfitNano6MenGreen->path = 'images/crossfit-nano6-men-green.jpg';
$crossfitNano6MenGreen->category = 'Men CrossFit Gear';
$crossfitNano6MenGreen->description = "Men's Reebok Crossfit Nano 6.0";
$crossfitNano6MenGreen->prix = 145;

$crossfitNano6WomenGreen = new Produit();
$crossfitNano6WomenGreen->path = 'images/crossfit-nano6-women-green.jpg';
$crossfitNano6WomenGreen->category = 'Women CrossFit Gear';
$crossfitNano6WomenGreen->description = "Women's Reebok Crossfit Nano 6.0";
$crossfitNano6WomenGreen->prix = 145;

$crossfitNano6MenBlack = new Produit();
$crossfitNano6MenBlack->path = 'images/crossfit-nano6-men-black.jpg';
$crossfitNano6MenBlack->category = 'Men CrossFit Gear';
$crossfitNano6MenBlack->description = "Men's Reebok Crossfit Nano 6.0";
$crossfitNano6MenBlack->prix = 145;

$crossfitNano6WomenPurple = new Produit();
$crossfitNano6WomenPurple->path = 'images/crossfit-nano6-women-purple.jpg';
$crossfitNano6WomenPurple->category = 'Women CrossFit Gear';
$crossfitNano6WomenPurple->description = "Women's Reebok Crossfit Nano 6.0";
$crossfitNano6WomenPurple->prix = 145;

$crossfitNano6MenBlue = new Produit();
$crossfitNano6MenBlue->path = 'images/crossfit-nano6-men-blue.jpg';
$crossfitNano6MenBlue->category = 'Men CrossFit Gear';
$crossfitNano6MenBlue->description = "Men's Reebok Crossfit Nano 6.0";
$crossfitNano6MenBlue->prix = 145;

$crossfitNano6YouthBlue = new Produit();
$crossfitNano6YouthBlue->path = 'images/crossfit-nano6-youth-blue.jpg';
$crossfitNano6YouthBlue->category = 'Boys CrossFit Gear';
$crossfitNano6YouthBlue->description = "Youth Reebok Crossfit Nano 6.0";
$crossfitNano6YouthBlue->prix = 99;


$souliersCrossfit = [];
$souliersCrossfit[] = $crossfitNano6MenGreen;
$souliersCrossfit[] = $crossfitNano6WomenGreen;
$souliersCrossfit[] = $crossfitNano6MenBlack;
$souliersCrossfit[] = $crossfitNano6WomenPurple;
$souliersCrossfit[] = $crossfitNano6MenBlue;
$souliersCrossfit[] = $crossfitNano6YouthBlue;

// Tout le travail ci-haut sera remplacé par le fruit d'une requête SQL

?>