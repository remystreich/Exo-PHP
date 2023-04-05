<!--Utilisez la boucle foreach pour parcourir un tableau d'entiers et afficher la somme de tous les éléments du tableau. -->
<?php
$numbers = [1, 4 , 2 ,5];
$sum = 0;
foreach ($numbers as  $value) {
    $sum +=  $value;
}
echo $sum;
?>