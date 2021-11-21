<?php
$x= rand(1,3);
while($a!=$x)
{
    $a= (int)readline("donner un nombre compris entre 1 et 3 : ");
    
}

if($a=$x)
    echo "félicitation vous avez réussi. ";
?>