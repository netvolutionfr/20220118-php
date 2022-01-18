<?php

class Velo
{
public $couleur;

public function afficheCouleur() {
echo $this->couleur;
}
}

$monvelo = new Velo();
$monvelo->couleur = "blanc";
echo $monvelo->couleur; // Affiche "blanc"
$monvelo->afficheCouleur(); // Pareil...

$tricycle = new Velo();
$tricycle->couleur = 'rouge';
$tricycle->afficheCouleur(); // Affiche 'rouge'
