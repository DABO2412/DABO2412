<?php
$NP = (int) readline ("veuillez saisir le nombre de cheveaux partants : ");
$NJ = (int) readline ("veuillez saisir le nombre de cheveaux joues : ");
$n =1;
for ($i=2; $i <=2 ; $i++) { 
    $n = $n*$i;
}
$d1 =1;
for ($i=2; $i <=($NP-$NJ) ; $i++) { 
    $d1=$d1*$i;
}
$d2 = 1;
for ($i=2; $i <=$NJ ; $i++) { 
    $d2 =$d2*$i;
}
$x= $n/$d1;
$y=$n/($d2*$d1);
echo "dans l'ordre vous avez  $x chance de gagner"."\n";
echo "dans le desordre vous avez $y chance de gagner";
?> 