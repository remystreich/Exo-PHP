<!--Écrivez un code PHP pour déterminer si une personne est admissible à un emprunt. Si son salaire est supérieur ou égal à 50 000 $ et qu'elle a moins de 30 ans, affichez "Admissible à l'emprunt.", sinon affichez "Non admissible à l'emprunt." -->
<?php
$age = 40;
$salary = 67000;
$condition = $age>=30 && $salary>=50000 ? "Admissible à l'emprunt" : "Non admissible";
echo $condition
?>