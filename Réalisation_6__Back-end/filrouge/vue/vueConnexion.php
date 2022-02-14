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
                    <form action="connexion.php" method="post">
                        <h1>Connexion</h1>
                            <div class="form-group">
                                <input type ="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type ="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type ="submit" class="btn btn-primary btn-block">Connexion</button>
                            </div>
                    </form>
                <p class="text-center"><a href="vueInscription.php">Inscription</a></p>
            </div>
        </main>
    </body>
</html>