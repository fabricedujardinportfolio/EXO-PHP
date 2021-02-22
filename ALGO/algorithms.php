<?php
/**
 * Level : Beginner
 *
 * Linear Search : Search a value in a given array by traversing the array
 * from the beginning, till the desired value is found.
 *
 * @param array $words list of words
 * @param string $search searched value
 * @return boolean result of search
 */
function linearSearch($words, $search) {
    // Code here
}

$words = array('book', 'pencil', 'pen', 'note book', 'sharpener', 'rubber');

echo linearSearch($words, 'note book') ? 'Vrai' : 'Faux';
echo linearSearch($words, 'dog') ? 'Vrai' : 'Faux';

/**
 * Level : Elementary
 *
 * Insertion Sort : Arrange the data in ascending order.
 *
 * @param array $numbers list of inordered numbers
 * @return array ascending array of number
 */
function insertionSort($numbers) {
    // Code here
}

print_r(insertionSort(array(3, 0, 2, 5, -1, 4, 1)));

/**
 * Level : Intermediate
 *
 * Array Flatten : Flattens an Array of Array into a flat Array.
 *
 * @param array $multiArray multidimensional array
 * @return array flattened array
 */
function arrayFlatten($multiArray) {
    // Code here
}

print_r(arrayFlatten(array('a', 'b', array(array(array('c'), 'd', 'e')), array(array('f')))));

/**
 * Level : Advanced
 *
 * Look And Say : Look at the number, visually grouping consecutive runs of the
 * same digit. Say the number, from left to right, group by group; as how many
 * of that digit there are - followed by the digit grouped. This becomes the
 * next number of the sequence.
 *
 * @param string $string
 * @return string sequence
 */
function lookAndSay($string) {
    // Code here
}

for ($i = 0, $s = 1; $i < 10; $i++) {
    $s = lookAndSay($s);
    print "$s\n";
}
