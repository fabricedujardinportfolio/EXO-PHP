<?php
$gender = array ("Homme","Femme");
function hummain($age,$gender)
{
    if ($gender == "Homme") {
        # code...
        echo"Vous êtes un homme ";
    }else{
        # code...
        echo "Vous êtes une femme ";
    }
    echo "et ";
    if ($age>18) {
        # code...
        echo "vous êtes majeur <br>";
    }elseif ($age<18) {
        # code...
        echo "vous êtes mineur <br>";
    }
}
hummain(28,"Homme");
hummain(13,"Femme");
hummain(16,"Homme");
hummain(12,"Homme");
hummain(59,"Femme");
?>