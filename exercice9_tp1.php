<?php
$max=0;
$i=0;
do {
    $i++;
    $t[$i]= (int) readline ("saisir le nombre $i : ");
    if ($t[$i]> $max) {
        $max=$t[$i];
        $imax =$i;
    }
    
} while ($t[$i]!=0);
echo "la plus grande valeur est :  ".$max."     ";
echo"la position de cette dernière est :  ".$imax;
?>