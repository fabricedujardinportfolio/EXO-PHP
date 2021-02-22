<?php
/**
 * Level : Elementary
 *Tri par insertion: organiser les données dans l'ordre croissant.
 *
 * @param array $numbers list of inordered numbers
 * @return array ascending array of number
 */
function display($array) {
    $total = count($array);
        foreach($array as $key => $valeur) {
            if($key == ($total - 1))
            {
                echo("$valeur");
            }
            else
            {
                echo("$valeur, ");
            }
        }
    }
    function isort($unsorted) {
        $j = 1; //Case analysée
        $n = count($unsorted);
        //echo("<br><br>	Start : $n cases <br><br>");
        
        while($j != $n)
            {
            echo("Boucle numero $j on étudie la case $j = ".$unsorted[$j]."<br>");
            $i = $j - 1; //Case étudiée par rapport à l'analysée
            $cle = $unsorted[$j];
            while(($i > -1) && ($unsorted[$i] > $cle))
                {
                echo("     |--- Sous-boucle i = $i <br>");
                $unsorted[$i + 1] = $unsorted[$i];
                $i = $i - 1;
                }
            $unsorted[$i + 1] = $cle;
            $j++;
            }
        return $unsorted;
        }
    
    $unsorted = array(543,118,328,11,5,989,1831,33,411,55,44,291,49 );
    echo("Avant :<br>");
    display($unsorted);
    echo("<br>Après :<br>");
    display(isort($unsorted));

?>