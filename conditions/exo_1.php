<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!--Écrivez un code PHP pour afficher le message "Bienvenue sur notre site." Si l'âge de l'utilisateur est
supérieur ou égal à 18 ans, sinon affichez "Vous n'êtes pas autorisé à accéder à ce site".-->
    <?php 
      $user =7;
      $welcome = $user >= 18 ? "Bienvenue sur notre site" : "Vous n'êtes pas autorisés à entrer sur ce site";
      echo($welcome);
    ?>
    
</body>
</html>