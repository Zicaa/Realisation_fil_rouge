<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="formulaire_inscription.css">
</head>
    <body>
        <main>
            <div class="login-form">
                    <form action="..\controler\controlerCompte.php" method="post">
                        <h1>Connexion</h1>
                            <div class="form-group">
                                <input type ="text" name="pseudo" class="form-control" placeholder="pseudo" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type ="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type ="submit" value=connexion>Connexion</button>
                            </div>
                    </form>
                <button type ="submit"><a href="vueInscription.php">Inscription</a></button>
            </div>
        </main>
    </body>
</html>