<?php 

// Recherche linéaire: 
//recherche une valeur dans un tableau donné
//en parcourant le tableau depuis le début, 
//jusqu'à ce que la valeur souhaitée
//soit trouvée.
/** 
    * @param array $words list of words
    * @param string $search searched value
    * @return boolean result of search
*/
function linearSearch($words, $search) {
    for ($i=0; $i < 6; $i++) { 
        if ($words[$i] == $search) {
            # code...
           return true;
        }
    }
}

$words = array('book', 'pencil', 'pen', 'note book', 'sharpener', 'rubber');

echo linearSearch($words, 'note book') ? 'Vrai <br>' : 'Faux <br>';
echo linearSearch($words, 'dog') ? 'Vrai <br>' : 'Faux <br>';


?>