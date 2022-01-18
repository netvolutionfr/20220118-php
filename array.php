<?php
$liste_de_courses = array('lait', 'pain', 'tomates', 'pâtes');

$liste2 = ['oeufs', 'chocolat'];

echo $liste_de_courses[0]; // affiche 'lait'

// Tableau associatif
$voiture = [
    'marque' => 'Tesla',
    'modele' => 'Model 3'
];
echo $voiture['marque']; // Affiche 'Tesla'

foreach ($voiture as $item) {
    echo $item;
}