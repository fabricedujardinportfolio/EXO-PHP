<?php
$magnitude = 2 ;
echo "Seisme de magnitude $magnitude <br>";
if($magnitude == 1){
    echo "Micro-séisme impossible à ressentir. <br>";
}elseif ($magnitude == 2) {
    # code...
       echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";   

}elseif ($magnitude == 3) {
    # code... 
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";   
}elseif ($magnitude == 4) {
    # code... 
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";   
}elseif ($magnitude == 5) {
    # code... 
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";   
}elseif ($magnitude == 6) {
    # code... 
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";   
}elseif ($magnitude == 7) {
    # code... 
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";   
}elseif ($magnitude == 8) {
    # code... 
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";   
}else{
    # code... 
    echo "Séisme capable de tout détruire sur une très vaste zone.";   
}

$magnitude = 9 ;
echo "Seisme de magnitude $magnitude <br>";
switch ($magnitude) // on indique sur quelle variable on travaille
{ 
    case 1: // dans le cas où $magnitude vaut 0     
        echo "Micro-séisme impossible à ressentir.<br>";   
    break;
    
    case 2: // dans le cas où $magnitude vaut 1
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";   
    break;
    
    case 3: // dans le cas où $magnitude vaut 2
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";
    break;
    
    case 4: // etc. etc.
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";
    break;
    
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";
    break;
    
    case 5:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";
    break;
    
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";
    break;
    
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";
    break;

    default:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
}
?>
