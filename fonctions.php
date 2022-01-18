<?php
function hello_world() {
    echo "Hello World!";
}

function multiplier($a, $b) {
    return $a * $b;
}

echo multiplier(2, 5); // affiche '10'
echo multiplier('test', 12); // Attention : mauvais type