<?php
$somme= 0;
$n=(int) readline ("veuillez saiir un valeur de votre choix : ");
for ($i=1; $i<=$n ;++$i) { 
$somme=$somme+$i;
}
echo "la somme des entiers entre 1 et $n est de : ".$somme;  
?>