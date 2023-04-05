<!--Écrivez un code PHP qui trie un tableau de nombres dans l'ordre croissant. Affichez le tableau avant et après le trie avec print_r.
Essayez d'innover la façon dont vous allez créer le tableau de nombre.-->
<?php 
$array =[1,6,2,7,4,9,5,8,3];
print_r($array);
sort($array);
print_r($array);
?>