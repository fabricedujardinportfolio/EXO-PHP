<?php
function deuxNombre($nombre1,$nombre2)
{
    # code...
    if ($nombre1>$nombre2) {
        # code...
        echo"Le premier nombre est plus grand <br>";
    }elseif ($nombre1<$nombre2) {
        # code...
        echo"Le premier nombre est plus petit <br>";
    }else {
        # code...
        echo "Les deux nombres sont identiques<br>";
    }
}
deuxNombre(12,12);
deuxNombre(12,13);
deuxNombre(20,12);
?>