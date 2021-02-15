<?php
$compteur = 0 ;
$compteurMultiplicateur = 15;
while ($compteur <= 100) {
    # code...
    echo "$compteur tour de boucle<br>";
    $result = $compteur * $compteurMultiplicateur;
    echo "$result On tient le bon bout<br>";
    $compteur++;
}
print $compteur;
?>