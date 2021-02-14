<?php
$isOk = true;
echo ($isOk) ? 'c\'est ok aprés correction du code source!! <br>' : 'c\'est pas bon car le code source était pas bon !!!<br>';
?>

<?php
$isOk = false;
if($isOk){
   echo 'c\'est pas bon !!!<br>';
}else{
    echo 'c\'est ok !!!<br>';
}
?>
