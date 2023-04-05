<!-- Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé continue pour ignorer les nombres négatifs. Affichez tous les nombres entiers.-->
<?php
$numbers = [1, 4 ,-4, 2 ,5 , -3];
for ($i=0; $i < count($numbers); $i++) { 
    if ($numbers[$i]>0) {
        echo $numbers[$i];
        continue;
    }
}
?>