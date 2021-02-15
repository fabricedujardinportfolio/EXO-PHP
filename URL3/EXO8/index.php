<?php
$BombeAtomic = 200;
$BombeAtomicMultiplicateur = 12;

while ($BombeAtomic >= 0) {
    # code...
    echo "Tour de boucle numéros : $BombeAtomic<br>";
    $result = $BombeAtomic * $BombeAtomicMultiplicateur;
    echo "La bombe explosera dans $result minute<br>";
    if ($BombeAtomic==0) {
        # code...
        echo "BOUM!";
    }
    $BombeAtomic--;  

}


?>