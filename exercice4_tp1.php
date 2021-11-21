<?php
$a=(int) readline ("veuillez saisir un nombre : ");
echo ("les dix premiers nombre suivant ".$a. "sont : ");
for ($i=0;$i < 10; $i++){ 
echo ++$a." ";
}
?>