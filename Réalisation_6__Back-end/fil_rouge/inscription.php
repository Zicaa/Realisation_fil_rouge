<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_inscription</title>
    <link rel="stylesheet" href="formulaire_inscription.css">
</head>
<body>
    <main>
        <header></header>
            <form action="connexion.php" method="post">
                <div class="page" id="page1">
                    <h1>Identité</h1>
                        <div>
                            <label for="nom">Nom :</label>
                            <input type ="text" id="nom" name="nom"></input>
                        </div>
                        <div>
                            <label for="prenom">Prénom :</label>
                            <input type ="text" id="prenom" name="prenom"></input>
                        </div>
                    <button class="next" type="button">Suivant</button>
                </div>
                <div class="page" id="page2">
                    <h1>Informations</h1>
                        <div>
                            <label for="adresse">Adresse :</label>
                            <input type ="text" id="adresse" name="adresse"></input>
                        </div>
                        <div>
                            <label for="CP">Code postal :</label>
                            <input type ="text" id="CP" name="CP"></input>
                        </div>
                        <div>
                            <label for="ville">Ville :</label>
                            <input type ="text" id="ville" name="ville"></input>
                        </div>
                    <button class="prev" type="button">Prédédent</button>
                    <button class="next" type="button">Suivant</button>
                </div>
                <div class="page" id="page3">
                    <h1>Contact</h1>
                        <div>
                            <label for="tel">Numéro de téléphone :</label>
                            <input type ="text" id="tel" name="tel"></input>
                        </div>
                        <div>
                            <label for="email">E-mail :</label>
                            <input type ="email" id="email" name="email"></input>
                        </div>
                    <button class="prev" type="button">Prédédent</button>
                    <button class="next" type="button">Suivant</button>
                </div>
                <div class="page" id="page4">
                    <h1>Identifiants</h1>
                        <div>
                            <label for="pseudo">Pseudo :</label>
                            <input type ="text" id="pseudo" name="pseudo"></input>
                        </div>
                        <div>
                            <label for="pass">Mot de passe :</label>
                            <input type ="password" id="pass" name="pass"></input>
                        </div>
                    <button class="prev" type="button">Prédédent</button>
                    <button>Terminer</button>
                </div>
             </form>
             <p class="text-center"><a href="inscription.php">Inscription</a></p>
    </main>
<script src="formulaire_inscription.js"></script>
</body>
</html>