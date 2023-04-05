<!--Écrivez un code PHP qui déclare un tableau associatif contenant les noms et les prix de 5 produits, puis affiche le contenu de ce tableau à l'aide d'une boucle foreach.-->
<?php
$array=['pomme' => 2,"banane" => 3 ,'fraise' => 4,'poire' =>6,'orange'=>8];
foreach ($array as $key => $value) {
    echo $key . ' ';
    echo $value . ' euro   ';
}
?>