<?php
$valeurcriptoPy = 1;
while($valeurcriptoPy <10){
    # code...
    echo "$valeurcriptoPy<br>";
    $result = $valeurcriptoPy++/0.5;
    echo $result;
    print("$valeurcriptoPy<br>");
}
echo $valeurcriptoPy;
?>