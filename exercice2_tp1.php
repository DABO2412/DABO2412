<?php
$b=rand(10,20);
while ($b!=$x ) {
   $x = (int) readline ("saisir un nombre ");
   if ($x<10) {
    echo(" le nombre à saisir est plus grand : ");
}
else
if ($x>20) {
    echo(" le nombre à saisir est plus petit : ");
}
}

if ($b=$x) {
    echo("vous avez trouvé");
}
?>