<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Écrivez un code PHP qui détermine si un nombre est pair ou impair. Si le nombre est pair, affichez "Le nombre est pair.", sinon affichez "Le nombre est impair.", si possible faites le en ternaire. -->
    <?php 
        $nmbr =12;
        if ($nmbr % 2 == 0){
            echo('Le nombre est pair');
        }else{
            echo('Le nombre est impair');
        }
    ?>
    
</body>
</html>