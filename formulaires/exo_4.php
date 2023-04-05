<!--
Créez un formulaire qui permet de faire la somme de 2 nombres et affiche le résultat. 
Attention, il faut vérifierles données reçues avant de faire le calcul, si une mauvaise valeur est rentrée, 
nous devrons afficher une erreur à l'utilisateur. -->
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
        <h1>Somme de deux nombres</h1>
    </header>
    <main>
        <form method="get">
            <label for="nmbr1">Entrer un nombre</label>
            <input type="text" name="nmbr1" id="nmbr1">
            <label for="nmbr2">Entrer un nombre</label>
            <input type="text" name="nmbr2" id="nmbr2">
            <button>Calculer</button>
        </form>
        <div>
            <h2>
                <?php
                    if (is_numeric($_GET['nmbr1']) && is_numeric($_GET['nmbr2'])) {
                        echo $_GET['nmbr1'] + $_GET['nmbr2'];   
                    }
                ?>
            </h2>
        </div>
    </main>

</body>

</html>