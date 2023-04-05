<!--Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX et de l'afficher en arrière- plan de la page web.
Instructions:
1. Créez une page HTML qui contient un formulaire pour la saisie d'une couleur HEX.
2. Utilisez le code PHP pour récupérer la valeur de l'input et l'afficher en arrière-plan de la page web 
en utilisant le code CSS suivant: background-color: #HEX;. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?php if (isset($_GET["color"])){
       echo($_GET["color"]);} ?>">
<body>
    <header>
        <h1>Formulaire Accès au compte</h1>
    </header>
    <main>
        <form method="get">
            <label for="color">Saisir couleur hexadécimale</label>
            <input type="text" name="color" id="color"> 
            <button>Envoyer</button>
        </form>
    </main>
    
</body>
</html>