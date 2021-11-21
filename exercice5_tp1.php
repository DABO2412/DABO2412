<?php
$x= (int) readline("saisir un nombre de votre choix : ");
$i=0;
function mult($x,$i){
    $produit=$x*$i;
    return $produit;
}
do {
    ++$i;
    echo "$x*$i =".mult($x,$i)." ";
} while ($i<10);

?>