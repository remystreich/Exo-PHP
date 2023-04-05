<!-- Écrivez une fonction qui renvoie ce résultat, le nombre de lignes étant un paramètre.-->
<?php
function pyramid($line){
    for ($i=0; $i <= $line ; $i++) { 
        echo str_repeat($i,$i), '<br>';
    }
}
pyramid(9);

?>