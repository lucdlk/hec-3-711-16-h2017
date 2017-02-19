<?php

// Définition de la classe (le moule qui permet de construire les objets)
class Product {

    public $description;

    public $prix;

    public $qteRestante;

    public function __construct($name, $prix, $qteRestante) {
        $this->description = $name;
        $this->prix = $prix;
        $this->qteRestante = $qteRestante;

        echo "La quantité restante de $this->description est de $this->qteRestante.<br>";
    }

    // Si les stocks sont supérieurs à 0 : retourner vrai, sinon faux.
    public function validerStock() {
        if ($this->qteRestante > 0) {
            return true;
        } else {
            return false;
        }
    }

    // La fonction acheter viendra réduire la quantité restante de 1
    public function acheter() {
        $this->qteRestante = $this->qteRestante - 1;
        echo "L'achat a été effectué.<br>";
        echo "La quantité restante est de $this->qteRestante.<br>";

        if (!$this->validerStock()) {
            $this->commanderAuFournisseur();
        }

    }

    // La quantité sera augmentée de 10.
    public function commanderAuFournisseur() {
        $this->qteRestante = $this->qteRestante + 10;

        echo "La commande au Fournisseur a été passée. La nouvelle quantité est $this->qteRestante.<br>";
    }
}

// Création des objets
$macbook = new Product('Macbook Pro', 1899.99, 2);
$iphone = new Product('iPhone', 699.99, 7);
$ecouteurs = new Product('Écouteurs Bose', 299.99, 5);

/**
 * Je vous laisse ces lignes pour que vous voyez comment on pourrait interagir avec
 * les propriétés à l'extérieur de l'objet.
 * $macbook->description = 'Macbook Pro';
 * $macbook->prix = 1899.99;
 * $macbook->qteRestante = 2;
 */

// Acheter un produit
$macbook->acheter();
$macbook->acheter();
$macbook->acheter();

// var_dump($macbook);
// var_dump($iphone);
// var_dump($ecouteurs);

// Tableau d'objets
$produits = [
    $macbook,
    $iphone,
    $ecouteurs
];

// Affichage de l'array (tableau)
var_dump($produits);

?>