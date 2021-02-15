<?php
function veriter($ouiOuNon){
    if($ouiOuNon==true){
        echo "je dit la verité ? : $ouiOuNon";
    }else{
        $ouiOuNon = false;
        echo "oups sécurité avant tout";
    }
}
veriter("non");
?>