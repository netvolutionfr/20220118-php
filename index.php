<?php
/* Boucle while (tant que) */
$nombre = 5;
while ($nombre > 0) {
    echo "Nombre vaut : $nombre\n";
    $nombre--;
}

/* Boucle do while */
$nombre = 0;
do {
    echo "Nombre vaut $nombre\n";
    ++$nombre;
} while ($nombre < 5);

/* Boucle for (boucle pour) */
for ($nombre = 0; $nombre < 5; $nombre++) {
    echo "Nombre vaut : $nombre\n";
}

/* $montableau est de type "array" */
$montableau = [1, 2, 3, 4, 5];
foreach ($montableau as $element) {
    echo "Elément : $element\n";
}