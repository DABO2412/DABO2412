<?php
$NNP = (int) readline ("veuillez saisir le nombre de cheveaux partant : ");
$NNJ = (int) readline ("veuillez saisir le nombre de cheveaux joues : ");
$N = 1 ;
$k = 1;
for ($i=1; $i <= $NNJ ; $i++) { 
    $N = $N *($i+$N-$NNP);
    $k = $k *$i;
}
$x=$N;
$y = $N/$k;
echo "dans l'ordre vous avez  $x chance de gagner"."\n";
echo "dans le desordre vous avez   $y  chance de gagner";

?>