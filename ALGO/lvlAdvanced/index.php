<?php

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


?>