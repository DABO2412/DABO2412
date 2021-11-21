<?php
$i=0;
$a=(int) readline ("veuillez saisir un nombre : ");
echo ("les dix premiers nombre suivant ".$a. "sont : ");
do {
,
    echo ++$a." ";
    $i++;
} while ($i<10);
?>