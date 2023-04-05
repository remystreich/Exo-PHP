<!--Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX, une largeur, une hauteur, 
un arrondie des bord (border-radius), et de générer un rectangle (ou carré) sur la page web. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Affichage rectangle</h1>
    </header>
    <main>
        <form method="get">
            <label for="color">Saisir couleur hexadécimale</label>
            <input type="text" name="color" id="color">
            <label for="width">Saisir largeur</label>
            <input type="text" name="width" id="width">
            <label for="width">Saisir Hauteur</label>
            <input type="text" name="height" id="height">
            <label for="radius">Saisir border radius</label>
            <input type="text" name="radius" id="radius">
            <button>Envoyer</button>
        </form>
        <div>
            <style>
                div{
                    background-color: <?= $_GET["color"] ?? 'none'; ?>;
                    height: <?=$_GET["height"] ?? '0';?>px;
                    width: <?=$_GET["width"] ?? '0'; ?>px;
                    border-radius: <?=$_GET["radius"] ?? '0'; ?>px; 
                }
            </style>

        </div>
    </main>
</body>

</html>