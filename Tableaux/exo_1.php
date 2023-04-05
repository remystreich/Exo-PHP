<!-- Écrivez un code PHP qui déclare un tableau contenant les noms de 5 fruits, puis affiche le contenu de ce tableau à l'aide d'une boucle.!>
<?php
$array=['pomme',"banane",'fraise','poire','orange'];
for ($i=0; $i < count($array); $i++) { 
    echo($array[$i]);
}
?>