<?php
$max=0;
for ($i=0; $i <20 ; $i++) { 
$tab[$i]=(int) readline ("saisir le nombre numéro"." ". ($i+1)." : ");
if ($tab[$i]> $max) {
$max=$tab[$i];
$imax =$i+1;
}

}
echo "la plus grande valeur est :  ".$max."      " ;
echo"la position de cette dernière est :  ".$imax;

?>