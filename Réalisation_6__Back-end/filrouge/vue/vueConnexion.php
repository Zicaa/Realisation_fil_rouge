<html lang="fr">
<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Connexion</title>
    <link rel="stylesheet" href="formulaire_inscription.css"></link>
</head>
    <body>
        <main>
            <div class="login-form">
                    <form action="../controler/controlerConnexion.php" method="post">
                        <h1>Connexion</h1>
                            <div class="form-group">
                                <input type ="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                                <input type ="password" name="mdp" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                <button type ="submit" value=connexion>Connexion</button>
                            </div>
                        <button type ="button"><a href="vueInscription.php">Inscription</a></button>
                    </form>
            </div>
        </main>
    </body>
</html>