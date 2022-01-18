<?php
/* Programmation orientée objet */
class Voiture
{
    public $energie;
    private $couleur;

    public function __construct($energie = 'essence', $couleur = 'blanc') {
        $this->energie = $energie;
        $this->couleur = $couleur;
    }
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
    public function getcouleur() {
        return $this->couleur;
    }
    public function avance() {
        if ($this->energie == 'essence') {
            echo "Vroum...";
        }
        if ($this->energie == 'electrique') {
            echo "...";
        }
    }
    public function klaxonne() {
        echo "Tuuuut";
    }
}
class Tracteur extends Voiture
{
    public function avance()
    {
        echo "Avance doucement...";
    }
}

class Voituredecourse extends Voiture
{
    public function avance()
    {
        parent::avance();
        echo "Avance plus vite...";
    }
}

$mavoiture = new Voituredecourse('essence');
echo $mavoiture->energie; // affiche 'essence';
$mavoiture->avance(); // Affiche 'Vroum' et 'Avance plus vite'

// $mavoiture->couleur = 'bleu'; Interdit car couleur est privé
$mavoiture->setCouleur('vert');
echo $mavoiture->getcouleur(); // Affiche 'vert'