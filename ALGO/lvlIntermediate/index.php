<?php
/**
 * Level : Intermediate
 *
 * Array Flatten: aplatit un tableau de tableau en un tableau plat.
 *
 * @param array $multiArray multidimensional array
 * @return array flattened array
 */
function arrayFlatten($multiArray) {
    $arrayName = array();
    foreach ($multiArray as $key => $value) {
        if (is_array($value)) {
            $arrayName = array_merge($arrayName,arrayFlatten($value));
            # code...
        }else {
            $arrayName[$key] = $value;
            # code...
        }
        # code...
    }
    return $arrayName;
}

print_r(arrayFlatten(array('a', 'b', array(array(array('c'), 'd', 'e')), array(array('f')))));

?>