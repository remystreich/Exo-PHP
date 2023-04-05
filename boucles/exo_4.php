<!--Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé break lorsqu'un nombre spécifique est trouvé pour sortir de la boucle. -->
<?php
$numbers = [1, 4 ,-4, 2 ,5 , -3];
for ($i=0; $i < count($numbers); $i++) { 
    echo $numbers[$i];
    if ($numbers[$i]==2) {
        break;
    }
}
?>