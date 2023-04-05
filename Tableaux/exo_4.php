<!--Écrivez un code PHP qui calcule la somme et la moyenne des éléments d'un tableau de nombres (généré aléatoirement).
Affichez le tableaux, la somme et la moyenne.-->
<?php
$array = [(rand(0,10)),(rand(0,10)),(rand(0,10)),(rand(0,10)),(rand(0,10))];
echo array_sum($array). '  / ' , (array_sum($array)/count($array));

 ?>