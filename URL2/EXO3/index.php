<?php
$gender = array ("Homme","Femme");
$age = 18;
if($age >= 18){
    echo "Vous êtes un $gender[0] et vous êtes majeur <br>";
}
if($age >= 18){
    echo "Vous êtes un $gender[1] et vous êtes majeur<br>";
}
if($age <= 18){
    echo "Vous êtes un $gender[0] et vous êtes mineur<br>";
}
if($age <= 18){
    echo "Vous êtes un $gender[1] et vous êtes mineur<br>";
}
?>