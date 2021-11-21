<?php
$prod=1;
$n=(int) readline ("veuillez saiir un valeur de votre choix : ");
for ($i=2; $i<=$n ;++$i) { 
    $prod=$prod*$i;
    }
    echo "la somme des entiers entre 1 et $n est de : ".$prod; 
?>