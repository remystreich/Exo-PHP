<!-- Écrivez un formulaire de login qui demande à l'utilisateur de saisir son nom d'utilisateur 
et son mot de passe, puis vérifiez ces informations pour déterminer si l'utilisateur peut accéder 
à un compte sécurisé. Vous choisissez le mot de passe et le nom d'utilisateur du compte sécurisé 
que vous voulez. (Créer un nouveau fichier php pour la page à sécuriser)-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Formulaire Accès au compte</h1>
    </header>
    <main>
        <form method="post">
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="name" id="name">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <button>Envoyer</button>
        </form>
    </main>
    <?php
        $name = 'Rémy';
        $pass = "try";
        if (isset($_POST["name"]) && isset($_POST["name"])) {
            $conform_pass = $_POST['password'];
            $conform_name = $_POST['name'];
            if($name===$conform_name && $pass === $conform_pass){
                echo 'bienvenue';
            }else{
                echo 'va te faire foutre;';
            };       
         }
      
    ?>
</body>
</html>