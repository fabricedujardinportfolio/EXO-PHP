<?php
$gender = array ("Homme","Femme");
echo ($gender[0] != 'Homme') ? 'C\'est une développeuse !!! <br>' : 'C\'est un développeur !!!<br>';
?>

<?php
if($gender[1] != 'Homme'){
   echo 'C\'est une développeuse !!!<br>';
}else{
    echo 'C\'est un développeur !!!<br>';
}

?>